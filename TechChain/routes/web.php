<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/login', [UserController::class,'postlogin']);

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('/register', [UserController::class,'postregister']);

Route::get('/detail/{slug}', [ProductController::class, 'detail'])->name('detail');
Route::post('/cart', [CartController::class, 'checkout']);

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::prefix('api')->group (function () {
    Route::get('/comments/product/{product_id}', [CommentController::class, 'product']);
    Route::resource('/comments', CommentController::class);
    Route::resource('/cart', CartController:: class);
});

Route::prefix('admin')->name('admin.')->middleware(AdminMiddleware::class)->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/product',[AdminController::class, 'product'])->name('product');
    Route::prefix('product')->name('product')->group(function() {
        Route::get('/add', [AdminController::class,'productAdd'])->name('add');  
        Route::post('/add', [AdminController::class,'postproductAdd']);  
    });
});

