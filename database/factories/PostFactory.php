<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //sentence crea una oracion 
            'name' => $this->faker->sentence,
            'free' =>rand(0,1),

            'course_id'=>rand(1,10),

        ];
    }
}
