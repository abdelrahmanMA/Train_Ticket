<?php

namespace Database\Factories;

use App\Models\Tmodel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TmodelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tmodel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
