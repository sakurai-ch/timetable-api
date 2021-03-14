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
        Time::insert(['id' => 1, 'time' => '10', 'order' => 1]);
        Time::insert(['id' => 2, 'time' => '11', 'order' => 2]);
        Time::insert(['id' => 3, 'time' => '12', 'order' => 3]);
        Time::insert(['id' => 4, 'time' => '13', 'order' => 4]);
        Time::insert(['id' => 5, 'time' => '14', 'order' => 5]);
        Time::insert(['id' => 6, 'time' => '15', 'order' => 6]);
        Time::insert(['id' => 7, 'time' => '16', 'order' => 7]);
        Time::insert(['id' => 8, 'time' => '17', 'order' => 8]);
        Time::insert(['id' => 9, 'time' => '18', 'order' => 9]);
        Time::insert(['id' => 10, 'time' => '19', 'order' => 10]);
    }
}
