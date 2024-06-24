<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registroAbkc' => $this->faker->word(),
            'nombrePerro' => $this->faker->word(),
            'fnac' => $this->faker->date(),
            'sexo' => $this->faker->word(),
            'nomDueno' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'estado' => $this->faker->city(),
            'correo' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber(),
            'otraRaza' => $this->faker->word(),
            'estandar' => $this->faker->word(),
            'sg' => $this->faker->word(),
            'bolsillo' => $this->faker->word(),
            'clasico' => $this->faker->word(),
            'muestraRaza' => $this->faker->word(),


            'image' => ''
        ];
    }
}
