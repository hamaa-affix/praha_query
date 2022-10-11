<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private int $min = 800;
    private int $max = 20000;
    private string $startDate = 'now';
    private string $endDate = '+2 week';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_code' => $this->faker->randomNumber(),
            'name' => $this->faker->unique()->lexify('Goods????'),
            'amount' => $this->faker->unique()->numberBetween($this->min, $this->max),
            'created_at' => $this->faker->dateTimeBetween($this->startDate, $this->endDate)
        ];
    }
}
