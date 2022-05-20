<?php

namespace App\Http\Controllers;

use App\Models\Rhythm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RhythmController extends Controller
{
    //

    public function index(): View
    {
        /*if (! Gate::allows('Ver e Listar Canecas')) {
            return abort(401);
        }*/

        try {
            $rhythms = Rhythm::all();
    
            return view('admin.rhythm.index', compact('rhythms'));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }

    public function store(
        Request $request
    ){
            DB::beginTransaction();

            $rhythms = new Rhythm;

            $rhythms->rhythm = $request->rhythm;

            $rhythms->save();

            DB::commit();
            return redirect()->back();
    }

    public function show( $rhythm_id ){
    

        try {
            $rhythms = Rhythm::find ($rhythm_id);
            
            return view ('admin.rhythm.show', compact('rhythms'));
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
    }

    public function create ()
    {


        try {
            $rhythms = Rhythm::all();
    
            return view('admin.rhythm.create', compact('rhythms'));
            
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
            
    }

    public function update (
        Request $request, $rhythm_id
    )
    {

        //dd($request->all());
        try {

            DB::beginTransaction();

                $rhythm = Rhythm::find($rhythm_id);

                $rhythm->rhythm = $request->rhythm;

            $rhythm->save();

            DB::commit();
            
            return redirect()->back();
        }catch (\Throwable $throwable){
            DB::rollBack();
            dd($throwable);
            //return redirect()->back()->withInput();
        }
    }

    public function destroy ( 
        $rhythm_id
    )
    { 
        try {
            $rhythm = Rhythm::find($rhythm_id);

            $rhythm->delete();

            return redirect()->route('ritmo.index');
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }
}
