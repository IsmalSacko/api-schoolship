<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /**
         *   $table->string('question');
        $table->unsignedBigInteger('created_by');
         */
        return [
            'question' => fake()->text(255),
            'created_by' => User::all()->random()->id,
        ];
    }
}
