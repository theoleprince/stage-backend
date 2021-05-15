<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $art = \App\Models\Blog::all();
        return [
            'blog_id' =>  $this->faker->randomElement($art)->id,
            'name' => $this->faker->sentence(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->sentence(),
            'content' => $this->faker->text,
        ];
    }
}
