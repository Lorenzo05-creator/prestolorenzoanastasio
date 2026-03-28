<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Elettronica',
            'Abbigliamento',
            'Sport',
            'Casa',
            'Auto',
            'Libri',
            'Giochi',
            'Musica',
            'Animali',
            'Altro'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}