<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // id = 1
        Category::create([
            'title'    => 'Pendidikan',
            'seotitle' => 'pendidikan',
        ]);

        // id = 2
        Category::create([
            'title'    => 'Politik',
            'seotitle' => 'politik',
        ]);

        // id = 3
        Category::create([
            'title'    => 'Olahraga',
            'seotitle' => 'olahraga',
        ]);

        // id = 4
        Category::create([
            'title'    => 'Ekonomi',
            'seotitle' => 'ekonomi',
        ]);

        // id = 5
        Category::create([
            'title'    => 'Teknologi',
            'seotitle' => 'teknologi',
        ]);
    }
}
