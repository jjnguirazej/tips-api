<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{ 
    /**
     * Define the model's default state.
     * O fake->name, quer dizeer que ele vai criar nomes falsos, podes mudar para sentenc, address e outros,
     * Pesquise por factory params
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'is_completed' => rand(0, 1)
        ];
    }
}
