<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Meminta Faker membuat URL gambar acak
            'image' => fake()->imageUrl(640, 480, 'technics', true), 
            // Meminta Faker membuat kalimat acak untuk judul
            'title' => fake()->sentence(),             
            // Meminta Faker membuat paragraf acak untuk konten
            'content' => fake()->paragraph(3), 
        ];
    }
}

?>