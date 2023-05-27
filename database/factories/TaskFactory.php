<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Factories\UserFactory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'admin_id' => 1,
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'user_id' => 105
        ];
    }

}
