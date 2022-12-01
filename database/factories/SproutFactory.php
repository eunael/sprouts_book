<?php

namespace Database\Factories;

use App\Models\Sprout;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class SproutFactory extends Factory
{
    protected $model = Sprout::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(3),
            'ingredients' => fake()->sentence(30),
            'preparation' => fake()->text(1000),
            'description' => fake()->sentence(50),
        ];
    }
}
