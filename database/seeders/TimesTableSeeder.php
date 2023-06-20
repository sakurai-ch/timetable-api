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
        $id = 1;
        $time = 9;
        $order = 1;

        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        $time++;
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
        Time::insert(['id' => $id++, 'time' => $time++, 'order' => $order++]);
    }
}
