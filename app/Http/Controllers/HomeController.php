<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;
use App\Models\Time;
use App\Models\Frame;
use App\Models\User;
use App\Models\TimeRequest;

class HomeController extends Controller
{
    public function get(Request $request)
    {
        $dates = Date::orderBy('order', 'ASC')->get();
        $times = Time::orderBy('order', 'ASC')->get();
        $frames = [];
        foreach ($times as $timeValue) {
            $frames_row = [];
            foreach ($dates as $dateValue) {
                $frame = Frame::where('date_id', $dateValue->id)
                    ->where('time_id', $timeValue->id)
                    ->first();
                $frames_row[] =
                    array(
                        "id" => $frame->id,
                        // "time" => $timeValue->time,
                        // "date" => $dateValue->date,
                        // "day" => $dateValue->day,
                        "state" => $frame->state
                    );
            }
            $frames[] = array(
                "time" => $timeValue->time, 
                "frames_row" => $frames_row
            );
        }
        
        // ---------------------------------------------
        
        $frame_all = Frame::get();
        $timeRequests = [];
        foreach ($frame_all as $item) {
            $timeRequests[$item->id] = false;
        }

        // ---------------------------------------------

        return response()->json([
            'message' => 'data got successfully',
            'date_data' => $dates,
            'frames_data' => $frames,
            'timeRequest_data'=> $timeRequests
        ], 200);
        
    }

    public function post(Request $request){
        $user_param = [
            "name" => $request->userName
        ];
        User::insert($user_param);

        $user = User::orderBy('id', 'DESC')->first();
        foreach($request->timeRequests as $key => $item){
            if($item==true){
                $request_param = [
                    "user_id" => $user->id,
                    "frame_id" => $key,
                    "state" => ""
                ];
                TimeRequest::insert($request_param);
            }
        }

        return response()->json([
            'message' => 'Request created successfully',
            'data' => $request
        ], 200);
    }

}
