<?php

namespace App\Http\Controllers;

use App\Models\Danceclass;
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
            $danceclasses = Danceclass::all();
    
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

            $danceclasses->weekday_id = $request->weekday_id;

            $danceclasses->hour_id = $request->hour_id;

            $danceclasses->rhythm_id = $request->rhythm_id;

            $danceclasses->name_group = $request->name_group;

            $danceclasses->save();

            DB::commit();
            return redirect()->back();
    }

    public function show( $danceclass_id ){
    

        try {
            $danceclasses = Danceclass::find ($danceclass_id);
            
            return view ('admin.danceclasses.show', compact('danceclasses'));
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
    }

    public function create ()
    {
        try {
            $danceclasses = Danceclass::all();
    
            return view('admin.danceclass.create', compact('danceclasses'));
            
            
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
