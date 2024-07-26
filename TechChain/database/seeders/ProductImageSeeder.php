<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductImage;
class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::insert([
            [
                "image"=>"https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/18/638463753210935577_samsung-galaxy-s23-fe-den-2.jpg",
                "product_id"=>1
            ],
            [
                "image"=>"https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/18/638463753211404407_samsung-galaxy-s23-fe-den-3.jpg",
                "product_id"=>1
            ],
            [
                "image"=>"https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/18/638463753210779352_samsung-galaxy-s23-fe-den-5.jpg",
                "product_id"=>1
            ],
            [
                "image"=>"https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/18/638463753210310750_samsung-galaxy-s23-fe-den-4.jpg",
                "product_id"=>1
            ],
            
        ]);
    }
}
