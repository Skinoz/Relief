<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $table->string('order_number');
        // $table->dateTime('shipped_at');
        // $table->enum('status', ['pending', 'success', 'cancelled']);

        return [
            'order_number' => uniqid()
        ];
    }

}
