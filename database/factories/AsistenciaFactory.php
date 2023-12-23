<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_alumno' => fake() -> numberBetween($int = 1, $int2 = 50),
            'tipo_asistencia' => fake() ->  randomKey(['A'=>1, 'T'=>2, 'F'=>3]),
            'fecha_asistencia' => fake() -> date(),
        ];
    }
}
