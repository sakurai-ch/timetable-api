<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Date;
use Carbon\Carbon;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = 1;
        $date = new Carbon('2023-06-28');
        $days = ['(日)','(月)','(火)','(水)','(木)','(金)','(土)'];
        $order = 1;

        Date::insert(['id' => $id++, 'date' => $date->format('n/j'),           'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        $date->addDay();
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        $date->addDay();
        $date->addDay();
        $date->addDay();
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        $date->addDay();
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        $date->addDay();
        $date->addDay();
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
        Date::insert(['id' => $id++, 'date' => $date->addDay()->format('n/j'), 'day' => $days[$date->dayOfWeek], 'order' => $order++]);
    }
}
