<?php

namespace Database\Factories;

use App\Models\Point;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $points = Point::all();
        return [
            'name' => fake()->company(),
            'price' => rand(0, 800),
            'is_active' => true,
            'point_id' => rand($points[0]->id, $points[count($points) - 1]->id)
        ];
    }
}
