<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake() -> firstName(),
            'apellido' => fake() -> lastName(),
            'direccion' => fake() -> address(),
            'telefono' => fake() -> phoneNumber(),
            'edad' => fake() -> numberBetween($int = 1, $int2 = 100),
            'fecha_nacimiento' => fake() -> date(),
        ];
    }
}
