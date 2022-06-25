<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        //ログインした従業員の名前を表示させる処理が必要
        return view('index');
    }

    public function show(Request $request)
    {
        //日付別勤怠ページの表示処理
    }

    public function startAttendance(Request $request)
    {
        $startAttendance = Attendance::create([
            'start_time' => Carbon::now(),
        ]);
        return redirect("/");
    }

    public function endAttendance(Request $request)
    {
        $endAttendance = Attendance::create([
            'end_time' => Carbon::now(),
        ]);
        return redirect("/");
    }
}
