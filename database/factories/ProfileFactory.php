<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'bio' => fake()->text,
            'school' => fake()->word
            // 'user_id' => User::factory(),  // Automatically creates and associates a User with the Profile
            // 'school' => $this->faker->word,
            // 'bio' => $this->faker->text,
        ];
    }
}
