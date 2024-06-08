<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "Carne" => $this->faker->unique()->numberBetween($min = 100000000, $max = 900000000),
            "Nombre_Alumno" => $this->faker->name(),
            "Correo_institucional" => $this->faker->safeEmail(),
            "Telefono" => $this->faker->unique()->numberBetween($min = 100000000, $max = 900000000)

        ];
    }
}
