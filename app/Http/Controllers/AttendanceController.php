<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $user_id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();

        $attendance = Attendance::where('user_id', $user_id)->where('date', $date);

        //勤務開始前
        if (empty($attendance)) {
            return view('index', ['user' => $user])->with([
                "is_attendance_start" => true,
            ]);
        }

        //勤務終了後


        //勤務開始後



        return view('index', ['user' => $user]);
    }

    public function show()
    {
        $dt = new Carbon();
        // $dt = $dt->subDays(6);
        $fixed_date = $dt->toDateString();
        echo $fixed_date;

        // $attendances = Attendance::where('date', $fixed_date);

        // $sum = 0;

        // foreach ($attendances as $attendance) {
        //     $rests = $attendance->rests;

        //     foreach ($rests as $rest) {
        //         $start_time = $rest->start_time;
        //         $start_dt = new Carbon($start_time);
        //         $end_time = $rest->end_time;
        //         $end_dt = new Carbon($end_time);
        //         $diff = $start_dt->diffInSeconds($end_dt);
        //         $sum = $sum + $diff;
        //     }
        // }
        // $items = [
        //     'sum' => $sum,
        // ];

        // return $items;
        // $items = Attendance::with('user')->get();
        // return view('attendance', compact('items'));
    }

    public function startAttendance(Request $request)
    {
        $user = Auth::user();
        Attendance::create([
            'user_id' => $user->id,
            'start_time' => Carbon::now(),
            'date' => Carbon::today()
        ]);
        return redirect("/");
    }

    public function endAttendance(Request $request)
    {
        $user = Auth::user();
        $endTime = Attendance::where('user_id', $user->id)->latest()->first();
        $endTime->update([
            'end_time' => Carbon::now()
        ]);
        return redirect("/");
    }
}
