<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array // Establece como se deben generar los datos para un modelo especifico
    {
        return [
            'details'       => $this->faker->sentences(4, true), //Parrafo con 4 oraciones, juntas en un solo parrafo.
            'client'        => $this->faker->name(),
            'is_fulfilled'  => $this->faker->boolean(),
        ];
    }
}
