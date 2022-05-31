<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        return [
            'user_id'    => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9']),
            'content'    => $this->faker->text(),
            'created_at' => $date_time,
            'updated_at' => $date_time,
        ];
    }
}