<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $harga = fake()->randomElement([15000, 25000, 35000]);
        $tip = fake()->randomElement([0, 0, 5000, 10000]); // Most often 0 tip
        return [
            'pembeli_id' => \App\Models\User::factory()->pembeli(),
            'photo_id' => \App\Models\Photo::factory(),
            'harga_foto' => $harga,
            'tip_amount' => $tip,
            'total_bayar' => $harga + $tip,
            'status' => fake()->randomElement(['pending', 'paid', 'paid']),
        ];
    }
}
