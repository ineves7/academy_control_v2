<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    //

    public function index()
    {
        /*if (! Gate::allows('Ver e Listar Canecas')) {
            return abort(401);
        }*/

        try {
            $schedules = Schedule::all();
            $hours = Hour::all();
    
            return view('admin.schedule.index', compact('schedules', 'hours'));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }

    public function store(
        Request $request
    ){
            DB::beginTransaction();

            $schedule = new Schedule;

            $schedule->people_id = $request->people_id;
            
            $schedule->danceclass_id = $request->danceclass_id;

            $schedule->start_time = $request->end_time;

            $schedule->save();

            DB::commit();
            return redirect()->back();
    }

    public function show( $rhythm_id ){
    

       
    }
}
