<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotdishmeat' => $this->faker->text(255),
            'hotdishveg' => $this->faker->text(255),
            'chili' => $this->faker->text(255),
            'rye' => $this->faker->text(255),
            'extrarye' => $this->faker->text(255),
            'focaccia' => $this->faker->text(255),
            'extrafocaccia' => $this->faker->text(255),
            'client_id' => \App\Models\Client::factory(),
        ];
    }
}
