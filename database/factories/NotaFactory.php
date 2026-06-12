<?php

namespace Database\Factories;

use App\Models\Nota;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<Nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(),
            'contenido' => fake()->paragraph(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
