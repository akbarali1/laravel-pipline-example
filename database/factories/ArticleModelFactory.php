<?php
namespace App\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title'       => $this->faker->sentence,
            'user_id'     => $this->faker->numberBetween(1, 10),
            'slug'        => $this->faker->slug,
            'keywords'    => $this->faker->word,
            'description' => $this->faker->text,
            'content'     => $this->faker->paragraph,
            'cover'       => $this->faker->imageUrl(),
            'comment_id'  => $this->faker->numberBetween(1, 100000),
            'view_count'  => $this->faker->numberBetween(1, 100000),
            'come_from'   => $this->faker->text,
            'tag_id'      => $this->faker->numberBetween(1, 100000),
            'tag_ids'     => $this->faker->text,
            'status'      => $this->faker->numberBetween(0, 1),
            'created_at'  => $this->faker->dateTime,
            'updated_at'  => $this->faker->dateTime,
        ];
    }
}
