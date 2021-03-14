<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;
use App\Models\Time;
use App\Models\Frame;
// use App\Models\User;
// use App\Models\TimeRequest;
use App\Models\Calculation;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function get(Request $request)
    {
        $calculation = DB::select('
            SELECT
                T.user_id,
                U.name AS user_name,
                FQ.frame_quantity,
                T.frame_id,
                F.date_id,
                F.time_id,
                UQ.user_quantity,
                F.priority,
                "" AS state
            FROM time_requests AS T

                JOIN users AS U
                ON T.user_id = U.id

                JOIN (
                    SELECT user_id, count(*) AS frame_quantity
                    FROM time_requests
                    GROUP BY user_id
                ) AS FQ
                ON T.user_id = FQ.user_id

                JOIN (
                    SELECT frame_id, count(*) AS user_quantity
                    FROM time_requests
                    GROUP BY frame_id
                ) AS UQ
                ON T.frame_id = UQ.frame_id

                JOIN frames AS F
                ON T.frame_id = F.id
        ');

        Calculation::truncate();

        foreach($calculation as $item){
            $param = [
                'user_id' => $item->user_id,
                'user_name' => $item->user_name,
                'frame_quantity' => $item->frame_quantity,
                'frame_id' => $item->frame_id,
                'date_id' => $item->date_id,
                'time_id' => $item->time_id,
                'user_quantity' => $item->user_quantity,
                'priority' => $item->priority,
                'state' => $item->state,
            ];
            Calculation::insert($param);
        }

        // -----------------------------------------------

        $count = Calculation::where('state', '')->count();
        while($count>0){
            $fixedUser = Calculation::
                where('state','')->
                orderBy('frame_quantity', 'ASC')->
                orderBy('user_quantity', 'ASC')->
                orderBy('user_id', 'ASC')->
                orderBy('priority', 'ASC')->
                first();

            Calculation::
                where('frame_id', $fixedUser->frame_id)->
                update(['state'=> 'notAdopted']);
            $notAdoptedUsers = Calculation::
                where('frame_id', $fixedUser->frame_id)->
                get();
            foreach($notAdoptedUsers as $item){
                $frame_datas = Calculation::
                    where('user_id', $item->user_id)->
                    get();
                foreach($frame_datas as $data){
                    Calculation::
                        where('user_id', $item->user_id)->
                        where('frame_id', $data->frame_id)->
                        update(['frame_quantity' => ($data->frame_quantity)-1]);
                }
            }

            Calculation::
                where('user_id', $fixedUser->user_id)->
                update(['state'=> 'notAdopted']);
            Calculation::
                where('id', $fixedUser->id)->
                update(['state'=> 'fixed']);

            $count = Calculation::where('state', '')->count();
        }

        // -----------------------------------------------

        $users_state = DB::select('
            SELECT
                U.id,
                U.name,
                CASE C.state
                    WHEN "fixed" THEN "fixed"
                    ELSE "warning"
                END AS state
            FROM users AS U
                LEFT JOIN (
                    SELECT user_id, state
                    FROM calculations
                    WHERE state = "fixed"
                ) AS C
                ON U.id = C.user_id
            ORDER BY U.id ASC;
        ');
        $userList = [];
        foreach($users_state as $item){
            $userList[] = 
                array(
                    "id" => $item->id,
                    "name" => $item->name,
                    "quantity" => "-",
                    "state" => $item->state,
                );
        }

        // -----------------------------------------------

        $dates = Date::orderBy('order', 'ASC')->get();
        $times = Time::orderBy('order', 'ASC')->get();
        $frames = [];
        foreach ($times as $timeValue) {
            $frames_row = [];
            foreach ($dates as $dateValue) {
                $fixedUser = Calculation::
                    where('date_id', $dateValue->id)->
                    where('time_id', $timeValue->id)->
                    where('state', 'fixed')->
                    first();
                    $count = Calculation::
                    where('date_id', $dateValue->id)->
                    where('time_id', $timeValue->id)->
                    where('state', 'fixed')->
                    count();
                $content = [];
                if($count>0){
                    $content[] = $fixedUser->user_name;
                }

                $frame = Frame::where('date_id', $dateValue->id)
                    ->where('time_id', $timeValue->id)
                    ->first();

                if ($frame->state === "close") {
                    $state = "close";
                } else if ($content !== []) {
                    $state = "unselectable";
                } else {
                    $state = "fixed";
                }

                $frames_row[] =
                    array(
                        "content" => $content,
                        "state" => $state,
                    );
            }
            $frames[] = array(
                "time" => $timeValue->time,
                "frames_row" => $frames_row
            );
        }

        // -----------------------------------------------

        return response()->json([
            'message' => 'data got successfully',
            'date_data' => $dates,
            'frames_data' => $frames,
            'user_list_data' => $userList
        ], 200);
    }
}
