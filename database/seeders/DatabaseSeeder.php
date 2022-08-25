<?php

namespace Database\Seeders;

use App\Models\Frizer;
use App\Models\Frizura;
use App\Models\Termin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Termin::truncate();
        Frizura::truncate();
        Frizer::truncate();





        User::factory(10)->create();


        $this->call([
            FrizerSeeder::class,
            FrizuraSeeder::class,
            TerminSeeder::class
        ]);




    }
}
