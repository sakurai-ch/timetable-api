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
        $priorityGroup = 10;
        Frame::insert(['id' => 11, 'date_id' => 1, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 12, 'date_id' => 1, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 13, 'date_id' => 1, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 14, 'date_id' => 1, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 15, 'date_id' => 1, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 16, 'date_id' => 1, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 17, 'date_id' => 1, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 18, 'date_id' => 1, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 19, 'date_id' => 1, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 20, 'date_id' => 1, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 20;
        Frame::insert(['id' => 21, 'date_id' => 2, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 22, 'date_id' => 2, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 23, 'date_id' => 2, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 24, 'date_id' => 2, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 25, 'date_id' => 2, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 26, 'date_id' => 2, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 27, 'date_id' => 2, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 28, 'date_id' => 2, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 29, 'date_id' => 2, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 30, 'date_id' => 2, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 30;
        Frame::insert(['id' => 31, 'date_id' => 3, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 32, 'date_id' => 3, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 33, 'date_id' => 3, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 34, 'date_id' => 3, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 35, 'date_id' => 3, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 36, 'date_id' => 3, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 37, 'date_id' => 3, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 38, 'date_id' => 3, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 39, 'date_id' => 3, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 40, 'date_id' => 3, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 40;
        Frame::insert(['id' => 41, 'date_id' => 4, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 42, 'date_id' => 4, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 43, 'date_id' => 4, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 44, 'date_id' => 4, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 45, 'date_id' => 4, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 46, 'date_id' => 4, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 47, 'date_id' => 4, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 48, 'date_id' => 4, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 49, 'date_id' => 4, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 50, 'date_id' => 4, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 50;
        Frame::insert(['id' => 51, 'date_id' => 5, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 52, 'date_id' => 5, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 53, 'date_id' => 5, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 54, 'date_id' => 5, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 55, 'date_id' => 5, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 56, 'date_id' => 5, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 57, 'date_id' => 5, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 58, 'date_id' => 5, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 59, 'date_id' => 5, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 60, 'date_id' => 5, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 90;
        Frame::insert(['id' => 61, 'date_id' => 6, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 62, 'date_id' => 6, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 63, 'date_id' => 6, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 64, 'date_id' => 6, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 65, 'date_id' => 6, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 66, 'date_id' => 6, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 67, 'date_id' => 6, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 68, 'date_id' => 6, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 69, 'date_id' => 6, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        Frame::insert(['id' => 70, 'date_id' => 6, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 60;
        Frame::insert(['id' => 71, 'date_id' => 7, 'time_id' => 1, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 72, 'date_id' => 7, 'time_id' => 2, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 73, 'date_id' => 7, 'time_id' => 3, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 74, 'date_id' => 7, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 75, 'date_id' => 7, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 76, 'date_id' => 7, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 77, 'date_id' => 7, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 78, 'date_id' => 7, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 79, 'date_id' => 7, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 80, 'date_id' => 7, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        $priorityGroup = 70;
        Frame::insert(['id' => 81, 'date_id' => 8, 'time_id' => 1, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        Frame::insert(['id' => 82, 'date_id' => 8, 'time_id' => 2, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        Frame::insert(['id' => 83, 'date_id' => 8, 'time_id' => 3, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        Frame::insert(['id' => 84, 'date_id' => 8, 'time_id' => 4, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 85, 'date_id' => 8, 'time_id' => 5, 'priority' => $priorityGroup+5, 'state' => 'selectable']);
        Frame::insert(['id' => 86, 'date_id' => 8, 'time_id' => 6, 'priority' => $priorityGroup+6, 'state' => 'selectable']);
        Frame::insert(['id' => 87, 'date_id' => 8, 'time_id' => 7, 'priority' => $priorityGroup+7, 'state' => 'selectable']);
        Frame::insert(['id' => 88, 'date_id' => 8, 'time_id' => 8, 'priority' => $priorityGroup+8, 'state' => 'selectable']);
        Frame::insert(['id' => 89, 'date_id' => 8, 'time_id' => 9, 'priority' => $priorityGroup+9, 'state' => 'selectable']);
        // Frame::insert(['id' => 90, 'date_id' => 8, 'time_id' => 10, 'priority' => $priorityGroup+10, 'state' => 'selectable']);

        // $priorityGroup = 90;
        // Frame::insert(['id' => 91, 'date_id' => 9, 'time_id' => 1, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 92, 'date_id' => 9, 'time_id' => 2, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 93, 'date_id' => 9, 'time_id' => 3, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 94, 'date_id' => 9, 'time_id' => 4, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 95, 'date_id' => 9, 'time_id' => 5, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 96, 'date_id' => 9, 'time_id' => 6, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 97, 'date_id' => 9, 'time_id' => 7, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 98, 'date_id' => 9, 'time_id' => 8, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 99, 'date_id' => 9, 'time_id' => 9, 'priority' => $priorityGroup+1000, 'state' => 'close']);
        // Frame::insert(['id' => 100, 'date_id' => 9, 'time_id' => 10, 'priority' => $priorityGroup+1000, 'state' => 'close']);

        $priorityGroup = 80;
        Frame::insert(['id' => 101, 'date_id' => 1, 'time_id' => 10, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 102, 'date_id' => 2, 'time_id' => 10, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
        Frame::insert(['id' => 103, 'date_id' => 3, 'time_id' => 10, 'priority' => $priorityGroup+3, 'state' => 'selectable']);
        Frame::insert(['id' => 104, 'date_id' => 4, 'time_id' => 10, 'priority' => $priorityGroup+4, 'state' => 'selectable']);
        Frame::insert(['id' => 105, 'date_id' => 5, 'time_id' => 10, 'priority' => $priorityGroup+5, 'state' => 'selectable']);

        $priorityGroup = 100;
        Frame::insert(['id' => 111, 'date_id' => 7, 'time_id' => 10, 'priority' => $priorityGroup+1, 'state' => 'selectable']);
        Frame::insert(['id' => 112, 'date_id' => 8, 'time_id' => 10, 'priority' => $priorityGroup+2, 'state' => 'selectable']);
    }
}
