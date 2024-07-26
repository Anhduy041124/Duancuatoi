<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "Name"=>"Điện Thoại",
        ]);
        Category::create([
            "Name"=>"Máy tính",
        ]);
        Category::create([
            "Name"=>"Máy tính bảng",
        ]);
        Category::create([
            "Name"=>"Đồng hồ thông minh",
        ]);
    }
}
