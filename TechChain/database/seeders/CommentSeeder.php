<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::insert([
            [
            'user_id' =>3,
            'product_id' =>1,
            'content' => 'Cái này xịn nha! Giá rẻ, chức năng nhiều',
            'rating' =>5,
            'created_at' =>now(),
            ],
            [
                'user_id' =>3,
                'product_id' =>1,
                'content' => 'Cũng được thôi. Giá hơi mắc!',
                'rating' =>4,
                'created_at' =>now(),
            ]

        ]);
    }
}
