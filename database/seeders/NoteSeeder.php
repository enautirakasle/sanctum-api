<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Note::create([
            'title' => 'titulo1', 'description' => 'titulo 1 en descripción'
        ]);
        Note::create([
            'title' => 'titulo2', 'description' => 'titulo 2 en descripción'
        ]);
        Note::create([
            'title' => 'titulo3', 'description' => 'titulo 3 en descripción'
        ]);
        Note::create([
            'title' => 'titulo4', 'description' => 'titulo 4 en descripción'
        ]);
    }
}
