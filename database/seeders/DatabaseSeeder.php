<?php

namespace Database\Seeders;

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
        $this->call(FramesTableSeeder::class);
        $this->call(DatesTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TimeRequestsTableSeeder::class);
        $this->call(AdministratorsTableSeeder::class);
        $this->call(CalculationTableSeeder::class);
    }
}
