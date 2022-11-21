
@extends('admin.layouts.layout')

@section('content')
    <!-- Page Heading -->
        
    <div class="text-center my-5">
        <h1 class="display-5 text-secondary"> 
            Gerenciar Turmas
        </h1>
    </div>

    <div class="row">

        <div class="col-lg-4 px-2 text-center ">
            <div class="card shadow text-center">
                <div class="card-header">
                    <h1>{{ $danceclass->name_danceclass}} </h1>
                </div>
                <div class="card-body">
                    @foreach($danceclass->schedules as $schedule)
                    <h3 class="text-danger"> 
                        {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                    </h3>
                    <h4 class=" my-4">
                        {{isset($schedule->start_time) ? $schedule->start_time : ''}}
                        Às
                        {{isset($schedule->end_time) ? $schedule->end_time : ''}}
                        
                    </h4>
                    @endforeach 
                    <h4>
                        Ritmo
                    </h4>
                    <hr>
                    <h3>
                        Alunos:  {{count($danceclass->people)}}
                        <br>
                        Valor Total
                    </h3>
                </div>
                
            </div>
        </div>

        <div class="col-lg-4 px-2 text-center ">
            <div class="card shadow text-center">
                <div class="card-header">
                    <h1> Adicionar Alunos </h1>
                </div>
            <div class="card-body">
                <form method="POST" action="{{route ('gerenciar_turmas.store')}}" autocomplete="off">
                    @csrf()
                    <div class="px-lg-2">
                        <div class="row mb-2">
                            <input type="text" name="danceclass_id" value="{{$danceclass->id}}" hidden />
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class=" mb-1 mt-2 form-control-label" for="people_id">Adicionar Pessoas</label>
                                    <select
                                    
                                    class="form-control"
                                    name="people_id"
                                    id="people_id"
                                    required>
                                    
                                    <option></option>

                                    @foreach ($addpeople as $addperson)

                                        <option value="{{$addperson->id}}">{{$addperson->name}}</option>

                                    @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-lg-1 col-lg-5">
                                <div class="form-group focused">
                                    <label class=" mb-1 mt-2 form-control-label" for="monthly_payment">Valor Mens.</label>
                                    <input 

                                    type="text"
                                    id="monthly_payment"
                                    class="form-control"
                                    name="monthly_payment"
                                    required
                                    />

                                </div>
                            </div>
                            <div class=" col-lg-5">
                                <div class="form-group focused">
                                    <label class=" mb-1 mt-2 form-control-label" for="payday">Dia Mens.</label>
                                    <input 

                                    type="text"
                                    id="payday"
                                    class="form-control"
                                    name="payday"
                                    required
                                    />

                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="row mb-2">
                            <div class="offset-lg-3 col-lg-6">
                                <button type="submit" class="btn btn-primary btn-lg col-12">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>

        <div class="col-lg-4 px-2 text-center ">
            <div class="card shadow text-center">
                <div class="card-header">
                    <h1> Alunos na Turma</h1>
                </div>
                <div class="card-body">
                    
                    @foreach ($danceclass->people as $person)
                        <p>
                        {{$person->name}}
                        </p>
                    @endforeach

                </div>
            </div>
        </div>

       
        

    </div>

@endsection