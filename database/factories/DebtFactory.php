<?php

namespace Database\Factories;

use App\Models\Debt;
use Illuminate\Database\Eloquent\Factories\Factory;

class DebtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Debt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->faker->text(250),
            'time1' => $this->faker->date('H:i:s', rand(1,54000)), // 00:00:00 - 15:00:00 tiempos entre las 12:00am hasta las 
            'time2' => $this->faker->date('H:i:s', rand(1,54000)),
            'pay' => $this->faker->randomFloat(10000.00, 20000.00, 100000000.00),
            'total' => $this->faker->randomFloat(10000.00, 20000.00, 100000000.00),
        ];
    }
}
