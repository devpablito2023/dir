<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //sentence para oraciones 
            'name' =>$this->faker->sentence,
            // slug para oraciones sin espacio
            'slug' =>$this->faker->slug,
            // imageurl para definir el tamaño de las imagenes 
            'image'=>$this->faker->imageUrl(1280,720),
            // text para definir un parrafo con caracteres 
            'description' =>$this->faker->text(800),

            'user_id' =>rand(1,5),
            'category_id' =>rand(1,3),
        ];
    }
}
