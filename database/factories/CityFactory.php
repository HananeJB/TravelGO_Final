<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'country'=> $this->faker->name(),
            'description'=> $this->faker->text(50),
            'image'=> $this->faker->randomElement($array = array ('blog-1.jpg','blog-2.jpg','blog-3.jpg','blog-4.jpg')),
        ];
    }
}
