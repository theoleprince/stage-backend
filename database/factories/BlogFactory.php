<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $artCat = \App\Models\BlogCategory::all();
        return [
            'blog_categorie_id' =>  $this->faker->randomElement($artCat)->id,
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'image' => "uploads/galeries/image1601386693.jpg",

        ];
    }
}
