<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Date;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Date::insert(['date' => '3/1', 'day' => '(月)', 'order' => 1]);
        Date::insert(['date' => '3/2', 'day' => '(火)', 'order' => 2]);
        Date::insert(['date' => '3/3', 'day' => '(水)', 'order' => 3]);
        Date::insert(['date' => '3/4', 'day' => '(木)', 'order' => 4]);
        Date::insert(['date' => '3/5', 'day' => '(金)', 'order' => 5]);
        Date::insert(['date' => '3/6', 'day' => '(土)', 'order' => 6]);
        Date::insert(['date' => '3/7', 'day' => '(日)', 'order' => 7]);
        Date::insert(['date' => '3/8', 'day' => '(月)', 'order' => 8]);
        Date::insert(['date' => '3/9', 'day' => '(火)', 'order' => 9]);
        Date::insert(['date' => '3/10', 'day' => '(水)', 'order' => 10]);
    }
}
