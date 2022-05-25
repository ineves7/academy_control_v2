<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Address;
use App\Models\Danceclass;
use App\Models\Genre;
use App\Models\Hour;
use App\Models\Level;
use App\Models\Schedule;
use App\Models\Weekday;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeopleRegisterController extends Controller
{

    public function index(): View
    {
        /*if (! Gate::allows('Ver e Listar Canecas')) {
            return abort(401);
        }*/

        try {
            $people = People::all();
    
            return view('admin.people.index', compact('people'));
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }

    public function store(
        Request $request
    ){

            DB::beginTransaction();

            $people = new People;

                $people->name = $request->name; 

                $people->level_id = $request->level_id;

                $people->genre_id = $request->genre_id;

                $people->birthdate = $request->birthdate;

                $people->status_id = $request->status_id;

                $people->phone = $request->phone;

            $people->save();


            $address = new Address;

                $address->people_id = $people->id;

                $address->city = $request->city;

                $address->district = $request->district;

                $address->street = $request->street;

                $address->number = $request->number;

            $address->save();


            DB::commit();
            return redirect()->back();
    }

    public function show( $person_id ){
    

        try {
            $person = People::find($person_id);
            $danceclasses = Danceclass::all();
            $hours = Hour::all();
            
            return view ('admin.people.show', compact('person', 'danceclasses', 'hours'));
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
    }

    public function create ()
    {

        try {

            $levels = Level::all();
            $genres = Genre::all();
    
            return view('admin.people.create', compact('levels', 'genres'));
            
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
            
    }

    public function update ( 
        Request $request, $person_id
    )
    {

        //dd($request->all());
        try {

            DB::beginTransaction();

            $person = People::find($person_id);

                $person->name = $request->name; 

                $person->level_id = $request->level_id;

                $person->danceclass_id = $request->danceclass_id;

                $person->genre_id = $request->genre_id;

                $person->birthdate = $request->birthdate; 

                $person->status_id = $request->status_id;

                $person->phone = $request->phone;

                $person->monthly_payment = $request->monthly_payment;

                $person->payday = $request->payday;

                $person->save();

            
            $address_id = $person->address->id;

            $address = Address::find($address_id);

                $address->city = $request->city;

                $address->district = $request->district;

                $address->street = $request->street;

                $address->number = $request->number;

            $address->save();

            DB::commit();
            
            return redirect()->back();
        }catch (\Throwable $throwable){
            DB::rollBack();
            dd($throwable);
            //return redirect()->back()->withInput();
        }
    }

    public function destroy ( 
        $person_id
    )
    { 
        try {
            $person = People::find($person_id);

            $person->delete();

            return redirect()->route('pessoas.index');
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
        
    }
}