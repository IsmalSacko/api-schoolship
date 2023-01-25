<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use App\Models\OpportunityDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opportunity::factory()->count(300)->create()->each(function ($opportunity) {
            $opportunity->details()->save(OpportunityDetails::factory()->make());
        });
    }
}
