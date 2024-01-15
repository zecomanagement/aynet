<?php

namespace Database\Seeders;

use App\Models\Ward;
use App\Models\County;
use App\Models\SubCounty;
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
        // \App\Models\User::factory(10)->create();
        

        $this->call(CountiesTableSeeder::class);
        $this->call(SubCountiesTableSeeder::class);
        $this->call(WardsTableSeeder::class);

    }
}
