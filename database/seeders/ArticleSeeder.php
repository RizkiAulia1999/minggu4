<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('articles')->insert([
            'title' => 'Olahraga',
            'content' => 'Olahraga Baik Untuk Kesehatan',
            'image' => 'https://i.pinimg.com/564x/9c/9c/24/9c9c241299453cd926cced332163ae8b.jpg'
        ]); */
        \App\Models\Article::factory()->count(10)->create();
    }
}
