<?php

namespace Database\Seeders;

use App\Models\Frizura;
use Illuminate\Database\Seeder;

class FrizuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Frizura::factory(15)->create();
    }
}
