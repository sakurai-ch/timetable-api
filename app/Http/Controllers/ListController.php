<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;
use App\Models\Time;
use App\Models\Frame;
use App\Models\User;
use App\Models\TimeRequest;

class ListController extends Controller
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
                $frame_id = $frame->id;
                $request_users = TimeRequest::where('frame_id', $frame_id)
                    ->orderBy('user_id', 'ASC')
                    ->get();
                $content = [];
                foreach($request_users as $item){
                    $request_user_name = User::where('id', $item->user_id)->first();
                    $content[] = $request_user_name->name;
                }

                if($frame->state === "close"){
                    $state = "close";
                }else if($content === []){
                    $state = "fixed";
                }else{
                    $state = "unselectable";
                }

                $frames_row[] =
                    array(
                        "content" => $content,
                        "state" => $state
                    );
            }
            $frames[] = array(
                "time" => $timeValue->time, 
                "frames_row" => $frames_row
            );
        }

        // -----------------------------------------------

        $users = User::orderBy('id', 'ASC')->get();
        $userList = [];
        foreach($users as $item){
            $quantity = TimeRequest::where("user_id", $item->id)->count();
            $userList[] = 
                array(
                    "id" => $item->id,
                    "name" => $item->name,
                    "quantity" => $quantity,
                    "state" => "selectable"
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
