<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_curso' => fake() -> numberBetween($int = 1, $int2 = 9),
            'id_docente' => fake() -> numberBetween($int = 1, $int2 = 14),
            'id_alumno' => fake() -> numberBetween($int = 1, $int2 = 50),
        ];
    }
}
