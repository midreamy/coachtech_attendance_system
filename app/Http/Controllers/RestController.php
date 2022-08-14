<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RestController extends Controller
{
    public function startRest(Request $request)
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();

        $attendance = Attendance::where('user_id', $id)->where('date', $date)->first();

        Rest::create([
            'attendance_id' => $attendance->id,
            'start_time' => $time,
        ]);

        return redirect("/");
    }

    public function endRest(Request $request)
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();

        $attendance = Attendance::where('user_id', $id)->where('date', $date)->first();

        $endTime = $attendance->rests->whereNull("end_time")->first();
        $endTime->update([
            'end_time' => $time
        ]);
        return redirect("/");
    }
}
