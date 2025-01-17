<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mensaje>
 */
class MensajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {    
        return [
            'nombre' => fake() -> name(),
            'mail' => fake() -> email(),
            'texto' => fake()->realText(rand(50, 100))
        ];    
    }
}
