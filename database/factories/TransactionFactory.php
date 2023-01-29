<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all();
        $services = Service::all();
        return [
            'user_id' => rand($users[0]->id, $users[count($users) - 1]->id),
            'service_id' => rand($services[0]->id, $services[count($services) - 1]->id),
            'cost' => rand(24, 568),
            'description' => fake()->text(),
        ];
    }
}
