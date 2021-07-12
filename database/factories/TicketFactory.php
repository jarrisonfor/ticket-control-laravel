<?php

namespace Database\Factories;

use App\Models\Ticket;

class TicketFactory extends BaseFactory
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
        return [
            $this->faker->dateTime(),
        ];
    }

}
