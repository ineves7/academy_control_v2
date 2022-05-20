<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Address;
use App\Models\Danceclass;
use App\Models\Hour;
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

                $people->modality_id = $request->modality_id;

                $people->level_id = $request->level_id;

                $people->danceclass_id = $request->danceclass_id;

                $people->genre_id = $request->genre_id;

                $people->birthdate = $request->birthdate; 

                $people->status_id = $request->status_id;

                $people->phone = $request->phone;

                $people->hour_id = $request->hour_id;
                
                $people->weekday_id = $request->weekday_id;

                $people->monthly_payment = $request->monthly_payment;

                $people->payday = $request->payday;

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
            
            return view ('admin.people.show', compact('person'));
        }catch (\Throwable $throwable){
            dd($throwable);
            return redirect()->back()->withInput();
        }
    }

    public function create ()
    {

        try {
            $danceclasses = Danceclass::all();
            $hours = Hour::all();
            $weekdays = Weekday::all();
    
            return view('admin.people.create', compact('danceclasses', 'hours', 'weekdays'));
            
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

                $person->modality_id = $request->modality_id;

                $person->level_id = $request->level_id;

                $person->group_id = $request->group_id;

                $person->genre_id = $request->genre_id;

                $person->data_de_nascimento = $request->data_de_nascimento; 

                $person->status_id = $request->status_id;

                $person->telefone = $request->telefone;

                $person->valor_mensalidade = $request->valor_mensalidade;

                $person->dia_mensalidade = $request->dia_mensalidade;

                $person->save();

            
            $address_id = $person->address->id;

            $address = Address::find($address_id);

                $address->cidade = $request->cidade;

                $address->bairro = $request->bairro;

                $address->rua = $request->rua;

                $address->numero = $request->numero;

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