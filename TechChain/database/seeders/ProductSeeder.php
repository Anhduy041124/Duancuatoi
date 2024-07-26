<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dsSP =   [
            [
                "name"=> "Samsung Galaxy S23 FE 5G 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/27/638471599704474139_samsung-galaxy-s23--fe-den-dd-AI.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 14890000,
                "sale_price"=> 12890000
            ],
            [
                "name"=> "OPPO Reno11 F 5G 8GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/1/638528387158436720_oppo-reno11-f-dd-200k.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 8990000,
                "sale_price"=> 8490000
            ],
            [
                "name"=> "Xiaomi Poco M6 Pro 8GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/1/25/638417729562660990_xiaomi-poco-m6-pro-dd-docquyen-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 6490000,
                "sale_price"=> 5990000
            ],
            [
                "name"=> "Samsung Galaxy S23 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/5/20/638518175414796345_samsung-galaxy-s23-5g-thumb-doc-quyen.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 24990000,
                "sale_price"=> 15490000
            ],
            [
                "name"=> "Honor X7b 8GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/7/638454261816142342_honor-x7b-xanh-6.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 5290000,
                "sale_price"=> 4990000
            ],
            [
                "name"=> "OPPO A18 4GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/5/10/638509283036082649_OPPO-A18-thumb.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3990000,
                "sale_price"=> 3690000
            ],
            [
                "name"=> "iPhone 15 Pro Max 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/30/638342502751589917_ip-15-pro-max-dd-bh-2-nam.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 34990000,
                "sale_price"=> 29690000
            ],
            [
                "name"=> "Samsung Galaxy S24 Ultra 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/14/638539621527869196_samsung-galaxy-s24-ultra-dd-tg.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 33990000,
                "sale_price"=> 29990000
            ],
            [
                "name"=> "Honor X9B 5G 12GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/1/11/638405567889290705_honor-x9b-dd-dq-1.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 8990000,
                "sale_price"=> 8390000
            ],
            [
                "name"=> "Samsung Galaxy A35 5G 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/10/638535792860352082_samsung-galaxy-a35-thucu.png",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 8290000,
                "sale_price"=> 7990000
            ],
            [
                "name"=> "OPPO A58 6GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/8/2/638265802441511578_oppo-a58-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4990000,
                "sale_price"=> 4690000
            ],
            [
                "name"=> "Samsung Galaxy Z Flip4 5G 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/2/28/638131739579610504_samsung-galaxy-z-flip4-tim-dd-tragop.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 23990000,
                "sale_price"=> 12990000
            ],
            [
                "name"=> "Tecno Spark Go 2024 4GB-64GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/4/24/638495503532379537_tecno-spark-go-trang-4.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 2190000,
                "sale_price"=> 1990000
            ],
            [
                "name"=> "Samsung Galaxy A15 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/10/638536064341568947_samsung-galaxy-a15-thucu.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4990000,
                "sale_price"=> 4490000
            ],
            [
                "name"=> "Xiaomi Redmi Note 13 6GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/1/638528385683685914_xiaomi-redmi-note-13-dd-bh-500k.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4890000,
                "sale_price"=> 4690000
            ],
            [
                "name"=> "Samsung Galaxy A05s 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/10/638535778605131398_samsung-galaxy-a05s.png",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3990000,
                "sale_price"=> 3590000
            ],
            [
                "name"=> "Honor X5 Plus 4GB-64GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/12/8/638376267641979247_honor-x5-plus-dd-doimoi.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 2790000,
                "sale_price"=> 2490000
            ],
            [
                "name"=> "Samsung Galaxy A23 5G",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/4/638451444037915753_samsung-galaxy-a23-5g-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 5990000,
                "sale_price"=> 3990000
            ],
            [
                "name"=> "OPPO A17k 3GB-64GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/12/20/638071502453762468_oppo-a17k-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3290000,
                "sale_price"=> 2790000
            ],
            [
                "name"=> "Xiaomi Redmi A2 2GB-32GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/11/8/638350315855506446_xiaomi-redmi-a2-den-dd-bg-18-thang.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 2190000,
                "sale_price"=> 1690000
            ],
            [
                "name"=> "Samsung Galaxy Z Fold5 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/28/638472349027667377_samsung-galaxy-zfold-5-dd-ai.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 40990000,
                "sale_price"=> 28990000
            ],
            [
                "name"=> "Samsung Galaxy Z Flip5 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/28/638472349027667377_samsung-galaxy-zflip-5-dd-ai.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 25990000,
                "sale_price"=> 16990000
            ],
            [
                "name"=> "iPhone 12 64GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/20/638440267786171563_iphone-12-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 17990000,
                "sale_price"=> 11990000
            ],
            [
                "name"=> "iPhone 11 64GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/20/638440266267791271_iphone-11-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 11990000,
                "sale_price"=> 8590000
            ],
            [
                "name"=> "OPPO Reno10 5G 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/19/638253719457391276_oppo-reno10-5g-xanh-5.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 9990000,
                "sale_price"=> 7990000
            ],
            [
                "name"=> "OPPO Reno8 T 4G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/27/638155148198300095_oppo-reno8-t-4g-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 8490000,
                "sale_price"=> 6290000
            ],
            [
                "name"=> "Honor 90 Lite 5G 8GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/12/4/638372867419434789_honor-90-lite-den-dd-100ngadoimoi.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 6490000,
                "sale_price"=> 5490000
            ],
            [
                "name"=> "OPPO A77s 8GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/12/20/638071499364966239_oppo-a77s-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 6290000,
                "sale_price"=> 5290000
            ],
            [
                "name"=> "Realme C51 6GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/17/638542285834454283_realme-c51-thumb-thucu2g.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4490000,
                "sale_price"=> 4290000
            ],
            [
                "name"=> "Vivo Y22s 8GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/9/637983398315589960_vivo-y22s-xanh-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 5990000,
                "sale_price"=> 4190000
            ],
            [
                "name"=> "Honor X8A 8GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/4/638451449167360007_honor-x8a-dd-docquyen.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4990000,
                "sale_price"=> 3990000
            ],
            [
                "name"=> "realme C55 6GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/21/638150119693895777_realme-c55-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4990000,
                "sale_price"=> 3990000
            ],
            [
                "name"=> "Vivo Y16 4GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/9/637983383787368693_vivo-y16-vang-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4490000,
                "sale_price"=> 3290000
            ],
            [
                "name"=> "Vivo T1x 4GB-64GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/7/21/637939995401683559_vivo-t1x-xanh-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 4490000,
                "sale_price"=> 3290000
            ],
            [
                "name"=> "Samsung Galaxy A04s",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/23/638204394272841272_samsung-galaxy-a04s-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 3990000,
                "sale_price"=> 2990000
            ],
            [
                "name"=> "OPPO Find N3 5G 16GB-512GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/12/4/638372781579679832_oppo-find-n3-5g-vang-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 44990000,
                "sale_price"=> 41990000
            ],
            [
                "name"=> "Xiaomi 14 Ultra 16GB-512GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/5/31/638527499953466244_xiaomi-14-ultra-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 32990000,
                "sale_price"=> 29990000
            ],
            [
                "name"=> "Samsung Galaxy S24 Plus 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/14/638539621527713029_samsung-galaxy-s24-plus-dd-tg.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 26990000,
                "sale_price"=> 25990000
            ],
            [
                "name"=> "iPhone 15 Pro 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/30/638342505369309720_ip-15-pro-dd-bh-2-nam.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 28990000,
                "sale_price"=> 25690000
            ],
            [
                "name"=> "Samsung Galaxy S23 Ultra 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/27/638471599704942918_samsung-galaxy-s23-ultra-xanh-dd-AI.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 31990000,
                "sale_price"=> 23990000
            ],
            [
                "name"=> "iPhone 15 Plus 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/30/638342507329455238_ip-15-plus-dd-bh-2-nam.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 25990000,
                "sale_price"=> 22390000
            ],
            [
                "name"=> "Samsung Galaxy S24 5G 256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/14/638539627628925688_samsung-galaxy-s24-dd-tg.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 22990000,
                "sale_price"=> 21990000
            ],
            [
                "name"=> "Xiaomi 14 12GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/3/26/638470498770132071_xiaomi-14-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 22990000,
                "sale_price"=> 20990000
            ],
            [
                "name"=> "iPhone 15 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/30/638342508308826366_ip-15-dd-bh-2-nam.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 22990000,
                "sale_price"=> 19590000
            ],
            [
                "name"=> "iPhone 14 Plus 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/20/638440340613418500_iphone-14-plus-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 24990000,
                "sale_price"=> 19490000
            ],
            [
                "name"=> "iPhone 14 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/2/20/638440338632079848_iphone-14-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 21990000,
                "sale_price"=> 17590000
            ],
            [
                "name"=> "iPhone 13 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/1/11/638090353746989186_iphone-13-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 18990000,
                "sale_price"=> 14090000
            ],
            [
                "name"=> "Samsung Galaxy S22 5G 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/3/31/638158962810512367_ss-galaxy-s22-dd-icon.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 21990000,
                "sale_price"=> 11990000
            ],
            [
                "name"=> "Honor 90 5G 12GB-512GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/12/6/638374810165060159_honor-90-512gb-bac-dd-docquyen-doimoi.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 11990000,
                "sale_price"=> 10490000
            ],
            [
                "name"=> "Samsung Galaxy A55 5G 128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/10/638535793278709771_samsung-galaxy-a55-thucu.png",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 9990000,
                "sale_price"=> 9690000
            ],
            [
                "name"=> "Xiaomi Redmi Note 13 Pro+ 5G 8GB-256GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/1/29/638421257525766915_xiaomi-redmi-note-13-pro-plus-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 10990000,
                "sale_price"=> 9290000
            ],
            [
                "name"=> "Vivo V25 5G 8GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/9/14/637987655741141806_vivo-v25-den-dd.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 10490000,
                "sale_price"=> 6990000
            ],
            [
                "name"=> "Xiaomi Redmi Note 13 Pro 8GB-128GB",
                "image"=> "https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2024/6/13/638538673359451892_xiaomi-redmi-note-13-pro-dd-bh.jpg",
                "instock"=>rand(10,50),
                "category_id"=>1,
                "price"=> 7290000,
                "sale_price"=> 6590000
            ]
        ];
        foreach ($dsSP as $sp) {
            Product::create(
                [
                    "name"=> $sp['name'],
                    "slug"=> Str::slug($sp['name']),
                    "image"=> $sp['image'],
                    "instock"=>$sp['instock'],
                    "category_id"=>$sp['category_id'],
                    "price"=> $sp['price'],
                    "sale_price"=> $sp['sale_price']
                ]
            );
        }
    }
}
