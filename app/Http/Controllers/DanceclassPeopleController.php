<?php

namespace App\Http\Controllers;

use App\Models\Danceclass;
use App\Models\DanceclassPeople;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanceclassPeopleController extends Controller
{
    public function index()
    {
        
        
    }

    public function store(
        Request $request
    ){
        try {
            DB::beginTransaction();

            $danceclass = Danceclass::find($request->danceclass_id);

            $verify = false;

            foreach ($danceclass->people as $personclass){

                    if ($personclass->id == $request->people_id){
                        $verify = true;
                        break;
                    }
            }

            if ($verify == false){

            $danceclass_people = new DanceclassPeople;


                $danceclass_people->people_id = $request->people_id;
                
                $danceclass_people->danceclass_id = $request->danceclass_id;

                $danceclass_people->monthly_payment = $request->monthly_payment;

                $danceclass_people->payday = $request->payday;

            $danceclass_people->save();

            DB::commit();
            return redirect()->back();
            }
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
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

    public function create()
    {
        
        
    }

    public function update()
    {
        
        
    }

    public function destroy()
    {
        
        
    }
}
