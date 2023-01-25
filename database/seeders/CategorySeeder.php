<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Stages',
            ],
            [
                'name' => 'bourses d\'études',
            ],
            [
                'name' => 'Environment',
            ],
            [
                'name' => 'Human Rights',
            ],

            [
                'name' => 'Social Development',
            ],
            [
                'name' => 'Peace and Security',
            ],
            [
                'name' => 'Others',
            ],
        ]);
    }
}
