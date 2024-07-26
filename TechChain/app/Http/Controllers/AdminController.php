<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Str;
class AdminController extends Controller
{
    public function dashboard()
    {
        $soDonHang = Order::count();
        $soSanPham = Product::count();
        $soKhachHang = User::where('role', 'user')->count();
        $doanhThu = Order::where('status', 'success')->sum('total_money');
        


        $dsDH = Order::orderBy('created_at', 'DESC')->limit(5)->get();
        $dsBL = Comment::orderBy('created_at', 'DESC')->limit(5)->get();

        $tkDoanhThu = Order::where('status', 'success')
        ->groupByRaw('YEAR(created_at), MONTH(created_at)')
        ->selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(total_money) as total')
        ->get();
        return view('admin.dashboard',compact(['soDonHang', 'soSanPham', 'soKhachHang', 'doanhThu','dsDH','dsBL' ,'tkDoanhThu']));
    }
    public function product(){
        $dsSP = Product::paginate(10);
        $soSanPham = Product::count();
        $soSapHet = Product::where('instock', '<=', 20)->count();
        $soDanhMuc = Category::count();
        return view('admin.product', compact('dsSP', 'soSanPham', 'soSapHet', 'soDanhMuc'));
    }
    public function productAdd(){

        $dsDM = Category::get();
        return view('admin.product_add', compact('dsDM'));
    }
    public function postproductAdd(Request $request){
        
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'instock' => 'required|integer|min:0',
        //     'category_id' => 'required|integer|exists:categories,id',
        //     'price' => 'required|numeric|min:1500000',
        //     'sale_price' => 'nullable|numeric|min:1000000',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        // Tạo sản phẩm mới
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->instock = $request->instock;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->image = '';
        $product->save();

        // Upload ảnh
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imgName = "{$product->id}.{$img->getClientOriginalExtension()}";
            $img->move(public_path('images/products/'), $imgName);
            $product->image = $imgName;
            $product->save();
        }
        if ($request->hasFile('images')) {
            $imgList = $request->file('images');
            foreach ($imgList as $key => $img) {
                // Ảnh chính: 1.png    Ảnh phụ: 1.0.png, 1.1.png, 1.2.png
                $imgName = "{$product->id}.{$key}.{$img->getClientOriginalExtension()}";
                $img->move(public_path('images/products/'), $imgName);
                $productImage = new ProductImage();
                $productImage->image = $imgName;
                $productImage->product_id = $product->id;
                $productImage->save();
            }
        }
        return redirect()->route('admin.product');
    }

}