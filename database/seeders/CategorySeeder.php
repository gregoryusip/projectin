<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name' => "Grafis & Desain",
                'slug' => "grafis-desain"
            ],
            [
                'name' => "Programming",
                'slug' => "programming"
            ],
            [
                'name' => "Digital Marketing",
                'slug' => "digital-marketing"
            ],
            [
                'name' => "Penulisan & Penerjemahan",
                'slug' => "penulisan-penerjemahan"
            ],
            [
                'name' => "Video & Animasi",
                'slug' => "video-animasi"
            ],
            [
                'name' => "Musik & Audio",
                'slug' => "musik-audio"
            ],
            [
                'name' => "Bisnis",
                'slug' => "bisnis"
            ],
            [
                'name' => "Gaya Hidup",
                'slug' => "gaya-hidup"
            ],
            [
                'name' => "Trending",
                'slug' => "trending"
            ],
        ]);
    }
}
