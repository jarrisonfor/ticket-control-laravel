<?php

namespace Database\Factories;

use App\Models\Persona;

class PersonaFactory extends BaseFactory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            $this->faker->name(),
        ];
    }
}
