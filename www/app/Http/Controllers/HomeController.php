<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Laravel way getting (more faster)
//        $reports = Report::with([
//            "user",
//            "reportType",
//            "sensorLog",
//        ])->paginate(15);

        // Single query
        $reports = DB::table('reports')
            ->select([
                'reports.*',
                'users.name as user_name',
                'report_types.name as report_type_name',
                'sensor_logs.sum as sensor_log_sum',
            ])
            ->join('users', 'reports.user_id', '=', 'users.id')
            ->join('report_types', 'reports.report_type_id', '=', 'report_types.id')
            ->join('sensor_logs', 'reports.sensor_log_id', '=', 'sensor_logs.id')
            ->paginate(15);


        return view('home', [
            "reports" => $reports,
        ]);
    }
}
