<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 100),
            'title' => ucwords(fake()->sentence()),
            'is_complete' => rand(0, 1), // lebih tepat boolean
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(), 
        ];
    }
}
