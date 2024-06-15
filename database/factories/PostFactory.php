<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title  = $this->faker->sentence;
        $seotitle   = Str::slug($title);

        // Ambil daftar semua file gambar di direktori tertentu
        $imageDirectory = public_path('storage/images/posts');
        $files = File::files($imageDirectory);

        // Pilih file secara acak dari daftar
        $randomFile = $files[array_rand($files)];
        $image = $randomFile->getFilename();

        return [
            'title'             => $title,
            'seotitle'          => $seotitle,
            'content'           => $this->faker->paragraph(rand(25,100)),
            'image'             => $image,
            'status'            => 'publish',
            'category_id'       => rand(1,5),
            'tag_id'            => rand(1,10),
            'user_id'           => 2,
            'created_at'        => now(),
            'updated_at'        => now(),
        ];
    }
}
