<?php

namespace Database\Seeders;

use App\Models\Frizer;
use Illuminate\Database\Seeder;

class FrizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Frizer::factory(10)->create();
    }
}
