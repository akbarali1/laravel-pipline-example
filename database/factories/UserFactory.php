<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name(),
            'email'             => $this->faker->unique()->safeEmail(),
            'status'            => $this->faker->randomElement(
                [
                    'active',
                    'inactive',
                    'pending',
                    'banned',
                    'deleted',
                    'suspended',
                    'deactivated',
                ]
            ),
            'email_verified_at' => now(),
            'password'          => bcrypt('password'), // password
            'remember_token'    => Str::random(10),
            'rights'            => $this->faker->randomElement(
                [
                    'user',
                    'admin',
                    'superadmin',
                    'superuser',
                ]
            ),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
