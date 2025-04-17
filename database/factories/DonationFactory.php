<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Sector;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(['role' => 'donor'])->id,
            'event_id' => Event::inRandomOrder()->first()->id ?? null,
            'sector_id' => Sector::inRandomOrder()->first()->id,
            'amount' => $this->faker->numberBetween(100, 1000),
            'message' => $this->faker->sentence(),
        ];
    }
}
