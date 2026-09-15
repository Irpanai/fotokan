<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fotografer_id' => \App\Models\User::factory()->fotografer(),
            'nama_event' => 'CFD ' . fake()->city(),
            'tanggal_event' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'lokasi' => fake()->address(),
        ];
    }
}
