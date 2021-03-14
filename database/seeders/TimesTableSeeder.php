<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Time;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Time::insert(['time' => '10', 'order' => 1]);
        Time::insert(['time' => '11', 'order' => 2]);
        Time::insert(['time' => '12', 'order' => 3]);
        Time::insert(['time' => '13', 'order' => 4]);
        Time::insert(['time' => '14', 'order' => 5]);
        Time::insert(['time' => '15', 'order' => 6]);
        Time::insert(['time' => '16', 'order' => 7]);
        Time::insert(['time' => '17', 'order' => 8]);
        Time::insert(['time' => '18', 'order' => 9]);
        Time::insert(['time' => '19', 'order' => 10]);
    }
}
