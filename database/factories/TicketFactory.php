<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\Train;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_count = User::count();
        $train_count = Train::count();
        return [
            'date' => $this->faker->dateTimeBetween($startDate='now', $endDate='6 months'),
            'from' => $this->faker->city(),
            'to' => $this->faker->city(),
            'user_id' => $this->faker->numberBetween($min = 1, $max = $user_count),
            'train_id' => $this->faker->numberBetween($min = 1, $max = $train_count),

        ];
    }
}
