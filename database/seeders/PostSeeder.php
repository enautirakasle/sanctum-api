<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Post::create([
        'title' => 'Post 1',
        'body' => 'Este es el contenido del post 1',
        'category_id' => 1
    ]);

    \App\Models\Post::create([
        'title' => 'Post 2',
        'body' => 'Este es el contenido del post 2',
        'category_id' => 2
    ]);

    \App\Models\Post::create([
        'title' => 'Post 3',
        'body' => 'Este es el contenido del post 3',
        'category_id' => 3
    ]);

    \App\Models\Post::create([
        'title' => 'Post 4',
        'body' => 'Este es el contenido del post 4',
        'category_id' => 1
    ]);
    }
}
