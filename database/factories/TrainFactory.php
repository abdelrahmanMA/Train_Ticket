<?php

namespace Database\Factories;

use App\Models\Train;
use App\Models\Tmodel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TrainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Train::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $models = Tmodel::pluck('id')->toArray();
        return [
            'tmodel_id' => $this->faker->randomElement($models),
            'capacity' => $this->faker->randomNumber(),
            'air_conditioned' => $this->faker->boolean()
        ];
    }
}
