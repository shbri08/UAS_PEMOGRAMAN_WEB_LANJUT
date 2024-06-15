<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Kurikulum',
            'slug' => 'kurikulum',
        ]);
        Tag::create([
            'name' => 'Media',
            'slug' => 'media',
        ]);
        Tag::create([
            'name' => 'Pemilu',
            'slug' => 'pemilu',
        ]);
        Tag::create([
            'name' => 'Kampanye',
            'slug' => 'kampanye',
        ]);
        Tag::create([
            'name' => 'Timnas',
            'slug' => 'timnas',
        ]);
        Tag::create([
            'name' => 'Piala Dunia',
            'slug' => 'piala-dunia',
        ]);
        Tag::create([
            'name' => 'Inflasi',
            'slug' => 'inflasi',
        ]);
        Tag::create([
            'name' => 'Rupiah',
            'slug' => 'rupiah',
        ]);
        Tag::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
        ]);
        Tag::create([
            'name' => 'Virtual Reality',
            'slug' => 'virtual-reality',
        ]);
    }
}
