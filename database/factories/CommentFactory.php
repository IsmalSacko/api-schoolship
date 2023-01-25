<?php

namespace Database\Factories;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
        /**
         * $table->foreign('created_by')->references('id')->on('users');
        $table->foreign('forum_id')->references('id')->on('forums');
         */
    {
        return [
            'comment' => fake()->text(255),
            'forum_id' => Forum::all()->random()->id,
            'created_by' => User::all()->random()->id,
        ];
    }
}
