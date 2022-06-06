<?php

namespace App\Http\Controllers;

use App\Models\Danceclass;
use App\Models\Hour;
use App\Models\Level;
use App\Models\People;
use App\Models\Rhythm;
use App\Models\Schedule;
use App\Models\Week_day;
use App\Models\Weekday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DanceclassController extends Controller
{
    public function index(): View
    {
        /*if (! Gate::allows('Ver e Listar Canecas')) {
            return abort(401);
        }*/

        try {
            $danceclasses = Danceclass::with('schedules')->get();
            return view('admin.danceclass.index', compact('danceclasses'));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }

    public function store(
        Request $request
    ){



            DB::beginTransaction();

            $danceclasses = new Danceclass;

                $danceclasses->level_id = $request->level_id;

                $danceclasses->rhythm_id = $request->rhythm_id;

                $danceclasses->name_danceclass = $request->name_danceclass;

                $danceclasses->private_class = $request->private_class;


            $danceclasses->save();


            foreach ($request->week_days as $weekday){

                $schedule = new Schedule();

                $schedule->danceclass_id = $danceclasses->id;

                $schedule->week_day = $weekday;

                $schedule->start_time = $request->start_time;

                $schedule->end_time = $request->end_time;
                
                $schedule->save();
            }
            

            DB::commit();
            return redirect()->back();
    }

    public function show( $danceclass_id ){
    
        try {
            $danceclass = Danceclass::find($danceclass_id);
            $people = People::all();
            $danceclasses = Danceclass::all();

            $ids = array();

            foreach ($danceclass->people as $person) {

                array_push($ids, $person->id);

            }

            $addpeople = People::with('danceclasses')->whereNotIn('id', $ids)->get();
            
            return view ('admin.danceclass.show', compact('danceclass', 'people', 'addpeople'));
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
    }

    public function create ()

    {
        try {
            $danceclasses = Danceclass::all();
            $rhythms = Rhythm::all();
            $week_days = Week_day::all();
            $hours = Hour::all();
            $levels = Level::all();
    
            return view('admin.danceclass.create', 
                compact(
                'danceclasses',
                'rhythms',
                'week_days',
                'hours',
                'levels'
            ));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
            
    }

    public function update (
        Request $request, $danceclass_id
    )
    {

        //dd($request->all());
        try {

            DB::beginTransaction();

            $danceclass = Danceclass::find($danceclass_id);

            $danceclass->level_id = $request->level_id;

            $danceclass->weekday_id = $request->weekday_id;

            $danceclass->hour_id = $request->hour_id;

            $danceclass->rhythm_id = $request->rhythm_id;

            $danceclass->name_group = $request->name_group;

            $danceclass->save();

            DB::commit();
            
            return redirect()->back();
        }catch (\Throwable $throwable){
            DB::rollBack();
            dd($throwable);
            //return redirect()->back()->withInput();
        }
    }

    public function destroy ( 
        $danceclass_id
    )
    { 
        try {
            $danceclass= Danceclass::find($danceclass_id);

            $danceclass->delete();

            return redirect()->route('turma.index');
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }
}
