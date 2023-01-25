<?php

namespace Database\Factories;

use App\Models\Lookups\Country;
use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\OpportunityDetails;

class OpportunityDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array OpportunityDetails
     */
    public function definition()

    {
        return [
            'opportunity_id' => Opportunity::all()->random()->id,
            'benefits' => fake()->text(500),
            'application_progress' => fake()->text(500),
            'further_queries' => fake()->text(500),
            'eligibilities' => fake()->text(500),
            'start_date' => fake()->dateTime(),
            'end_date' => fake()->dateTime(),
            'official_link' => fake()->url,

        ];
    }
}
