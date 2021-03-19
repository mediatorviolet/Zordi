<?php

namespace Database\Factories;

use App\Models\Ordinateurs;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdinateursFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ordinateurs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name
        ];
    }
}
