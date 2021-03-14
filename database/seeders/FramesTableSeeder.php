<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Frame;

class FramesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Frame::insert(['id' => 1, 'time_id' => 1, 'priority' => 1, 'state' => 'selectable']);
        Frame::insert(['id' => 2, 'date_id' => 1, 'time_id' => 2, 'priority' => 2, 'state' => 'selectable']);
        Frame::insert(['id' => 3, 'date_id' => 1, 'time_id' => 3, 'priority' => 3, 'state' => 'selectable']);
        Frame::insert(['id' => 4, 'date_id' => 1, 'time_id' => 4, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 5, 'date_id' => 1, 'time_id' => 5, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 6, 'date_id' => 1, 'time_id' => 6, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 7, 'date_id' => 1, 'time_id' => 7, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 8, 'date_id' => 1, 'time_id' => 8, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 9, 'date_id' => 1, 'time_id' => 9, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 10, 'date_id' => 1, 'time_id' => 10, 'priority' => 999, 'state' => 'close']);
        
        Frame::insert(['id' => 11, 'date_id' => 2, 'time_id' => 1, 'priority' => 4, 'state' => 'selectable']);
        Frame::insert(['id' => 12, 'date_id' => 2, 'time_id' => 2, 'priority' => 5, 'state' => 'selectable']);
        Frame::insert(['id' => 13, 'date_id' => 2, 'time_id' => 3, 'priority' => 6, 'state' => 'selectable']);
        Frame::insert(['id' => 14, 'date_id' => 2, 'time_id' => 4, 'priority' => 7, 'state' => 'selectable']);
        Frame::insert(['id' => 15, 'date_id' => 2, 'time_id' => 5, 'priority' => 8, 'state' => 'selectable']);
        Frame::insert(['id' => 16, 'date_id' => 2, 'time_id' => 6, 'priority' => 9, 'state' => 'selectable']);
        Frame::insert(['id' => 17, 'date_id' => 2, 'time_id' => 7, 'priority' => 10, 'state' => 'selectable']);
        Frame::insert(['id' => 18, 'date_id' => 2, 'time_id' => 8, 'priority' => 11, 'state' => 'selectable']);
        Frame::insert(['id' => 19, 'date_id' => 2, 'time_id' => 9, 'priority' => 12, 'state' => 'selectable']);
        Frame::insert(['id' => 20, 'date_id' => 2, 'time_id' => 10, 'priority' => 13, 'state' => 'selectable']);

        Frame::insert(['id' => 21, 'date_id' => 3, 'time_id' => 1, 'priority' => 14, 'state' => 'selectable']);
        Frame::insert(['id' => 22, 'date_id' => 3, 'time_id' => 2, 'priority' => 15, 'state' => 'selectable']);
        Frame::insert(['id' => 23, 'date_id' => 3, 'time_id' => 3, 'priority' => 16, 'state' => 'selectable']);
        Frame::insert(['id' => 24, 'date_id' => 3, 'time_id' => 4, 'priority' => 17, 'state' => 'selectable']);
        Frame::insert(['id' => 25, 'date_id' => 3, 'time_id' => 5, 'priority' => 18, 'state' => 'selectable']);
        Frame::insert(['id' => 26, 'date_id' => 3, 'time_id' => 6, 'priority' => 19, 'state' => 'selectable']);
        Frame::insert(['id' => 27, 'date_id' => 3, 'time_id' => 7, 'priority' => 20, 'state' => 'selectable']);
        Frame::insert(['id' => 28, 'date_id' => 3, 'time_id' => 8, 'priority' => 21, 'state' => 'selectable']);
        Frame::insert(['id' => 29, 'date_id' => 3, 'time_id' => 9, 'priority' => 22, 'state' => 'selectable']);
        Frame::insert(['id' => 30, 'date_id' => 3, 'time_id' => 10, 'priority' => 23, 'state' => 'selectable']);

        Frame::insert(['id' => 31, 'date_id' => 4, 'time_id' => 1, 'priority' => 14, 'state' => 'selectable']);
        Frame::insert(['id' => 32, 'date_id' => 4, 'time_id' => 2, 'priority' => 15, 'state' => 'selectable']);
        Frame::insert(['id' => 33, 'date_id' => 4, 'time_id' => 3, 'priority' => 16, 'state' => 'selectable']);
        Frame::insert(['id' => 34, 'date_id' => 4, 'time_id' => 4, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 35, 'date_id' => 4, 'time_id' => 5, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 36, 'date_id' => 4, 'time_id' => 6, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 37, 'date_id' => 4, 'time_id' => 7, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 38, 'date_id' => 4, 'time_id' => 8, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 39, 'date_id' => 4, 'time_id' => 9, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 40, 'date_id' => 4, 'time_id' => 10, 'priority' => 999, 'state' => 'close']);

        Frame::insert(['id' => 41, 'date_id' => 5, 'time_id' => 1, 'priority' => 17, 'state' => 'selectable']);
        Frame::insert(['id' => 42, 'date_id' => 5, 'time_id' => 2, 'priority' => 18, 'state' => 'selectable']);
        Frame::insert(['id' => 43, 'date_id' => 5, 'time_id' => 3, 'priority' => 19, 'state' => 'selectable']);
        Frame::insert(['id' => 44, 'date_id' => 5, 'time_id' => 4, 'priority' => 20, 'state' => 'selectable']);
        Frame::insert(['id' => 45, 'date_id' => 5, 'time_id' => 5, 'priority' => 21, 'state' => 'selectable']);
        Frame::insert(['id' => 46, 'date_id' => 5, 'time_id' => 6, 'priority' => 22, 'state' => 'selectable']);
        Frame::insert(['id' => 47, 'date_id' => 5, 'time_id' => 7, 'priority' => 23, 'state' => 'selectable']);
        Frame::insert(['id' => 48, 'date_id' => 5, 'time_id' => 8, 'priority' => 24, 'state' => 'selectable']);
        Frame::insert(['id' => 49, 'date_id' => 5, 'time_id' => 9, 'priority' => 25, 'state' => 'selectable']);
        Frame::insert(['id' => 50, 'date_id' => 5, 'time_id' => 10, 'priority' => 26, 'state' => 'selectable']);

        Frame::insert(['id' => 51, 'date_id' => 6, 'time_id' => 1, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 52, 'date_id' => 6, 'time_id' => 2, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 53, 'date_id' => 6, 'time_id' => 3, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 54, 'date_id' => 6, 'time_id' => 4, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 55, 'date_id' => 6, 'time_id' => 5, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 56, 'date_id' => 6, 'time_id' => 6, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 57, 'date_id' => 6, 'time_id' => 7, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 58, 'date_id' => 6, 'time_id' => 8, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 59, 'date_id' => 6, 'time_id' => 9, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 60, 'date_id' => 6, 'time_id' => 10, 'priority' => 999, 'state' => 'close']);

        Frame::insert(['id' => 61, 'date_id' => 7, 'time_id' => 1, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 62, 'date_id' => 7, 'time_id' => 2, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 63, 'date_id' => 7, 'time_id' => 3, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 64, 'date_id' => 7, 'time_id' => 4, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 65, 'date_id' => 7, 'time_id' => 5, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 66, 'date_id' => 7, 'time_id' => 6, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 67, 'date_id' => 7, 'time_id' => 7, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 68, 'date_id' => 7, 'time_id' => 8, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 69, 'date_id' => 7, 'time_id' => 9, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 70, 'date_id' => 7, 'time_id' => 10, 'priority' => 999, 'state' => 'close']);

        Frame::insert(['id' => 71, 'date_id' => 8, 'time_id' => 1, 'priority' => 27, 'state' => 'selectable']);
        Frame::insert(['id' => 72, 'date_id' => 8, 'time_id' => 2, 'priority' => 28, 'state' => 'selectable']);
        Frame::insert(['id' => 73, 'date_id' => 8, 'time_id' => 3, 'priority' => 29, 'state' => 'selectable']);
        Frame::insert(['id' => 74, 'date_id' => 8, 'time_id' => 4, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 75, 'date_id' => 8, 'time_id' => 5, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 76, 'date_id' => 8, 'time_id' => 6, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 77, 'date_id' => 8, 'time_id' => 7, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 78, 'date_id' => 8, 'time_id' => 8, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 79, 'date_id' => 8, 'time_id' => 9, 'priority' => 999, 'state' => 'close']);
        Frame::insert(['id' => 80, 'date_id' => 8, 'time_id' => 10, 'priority' => 999, 'state' => 'close']);

        Frame::insert(['id' => 81, 'date_id' => 9, 'time_id' => 1, 'priority' => 30, 'state' => 'selectable']);
        Frame::insert(['id' => 82, 'date_id' => 9, 'time_id' => 2, 'priority' => 31, 'state' => 'selectable']);
        Frame::insert(['id' => 83, 'date_id' => 9, 'time_id' => 3, 'priority' => 32, 'state' => 'selectable']);
        Frame::insert(['id' => 84, 'date_id' => 9, 'time_id' => 4, 'priority' => 33, 'state' => 'selectable']);
        Frame::insert(['id' => 85, 'date_id' => 9, 'time_id' => 5, 'priority' => 34, 'state' => 'selectable']);
        Frame::insert(['id' => 86, 'date_id' => 9, 'time_id' => 6, 'priority' => 35, 'state' => 'selectable']);
        Frame::insert(['id' => 87, 'date_id' => 9, 'time_id' => 7, 'priority' => 36, 'state' => 'selectable']);
        Frame::insert(['id' => 88, 'date_id' => 9, 'time_id' => 8, 'priority' => 37, 'state' => 'selectable']);
        Frame::insert(['id' => 89, 'date_id' => 9, 'time_id' => 9, 'priority' => 38, 'state' => 'selectable']);
        Frame::insert(['id' => 90, 'date_id' => 9, 'time_id' => 10, 'priority' => 39, 'state' => 'selectable']);

        Frame::insert(['id' => 91, 'date_id' => 10, 'time_id' => 1, 'priority' => 40, 'state' => 'selectable']);
        Frame::insert(['id' => 92, 'date_id' => 10, 'time_id' => 2, 'priority' => 41, 'state' => 'selectable']);
        Frame::insert(['id' => 93, 'date_id' => 10, 'time_id' => 3, 'priority' => 42, 'state' => 'selectable']);
        Frame::insert(['id' => 94, 'date_id' => 10, 'time_id' => 4, 'priority' => 43, 'state' => 'selectable']);
        Frame::insert(['id' => 95, 'date_id' => 10, 'time_id' => 5, 'priority' => 44, 'state' => 'selectable']);
        Frame::insert(['id' => 96, 'date_id' => 10, 'time_id' => 6, 'priority' => 45, 'state' => 'selectable']);
        Frame::insert(['id' => 97, 'date_id' => 10, 'time_id' => 7, 'priority' => 46, 'state' => 'selectable']);
        Frame::insert(['id' => 98, 'date_id' => 10, 'time_id' => 8, 'priority' => 47, 'state' => 'selectable']);
        Frame::insert(['id' => 99, 'date_id' => 10, 'time_id' => 9, 'priority' => 48, 'state' => 'selectable']);
        Frame::insert(['id' => 100, 'date_id' => 10, 'time_id' => 10, 'priority' => 49, 'state' => 'selectable']);

    }
}
