<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $categories = ['Tech', 'News', 'Tutorial', 'Lifestyle', 'Opinion'];

        return [
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(5, true),
            'image' => 'https://picsum.photos/600/400?random=' . $this->faker->unique()->numberBetween(1, 1000),
            'author' => $this->faker->name(),
            'category' => $this->faker->randomElement($categories),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => now(),
        ];
    }
}