<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "menu" => $this->faker->sentence(3),
            "category_id" => mt_rand(1,3),
            "kantin_id" => mt_rand(1,5),
            "slug" => $this->faker->slug(),
            "harga" => $this->faker->randomNumber(5, true),
            "deskripsi" => $this->faker->sentence(5),
        ];
    }
}
