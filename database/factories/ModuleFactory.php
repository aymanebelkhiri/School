<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modules>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => $this->faker->randomElement(['Python','Java', 'C++','PHP','Front-end',
                                                   'back-end','Soft skills','Cloud Native','Securité']),
            'MasseHoraire' => $this->faker->randomNumber(),
            'Coefficient' => $this->faker->numberBetween(1,3),
            'Filiére' => $this->faker->numberBetween(1,10)                                     
        ];
    }
}
