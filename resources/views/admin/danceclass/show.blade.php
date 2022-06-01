
@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
        
    <div class="row">

        <div class="col-lg-4 px-2 text-center bg-dark">
            <div class="card shadow text-center">
                <div class="card-header">
                    <h1> Turma {{ $danceclass->name_danceclass}} </h1>
                </div>
                <div class="card-body">
                    <h3> 
                        @foreach ($danceclass->schedules as $schedule)
                            {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                        @endforeach 
                        <br>
                        @foreach ($danceclass->schedules as $schedule)
                            {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                        @endforeach 
                    </h3>
                    <h4 class=" my-4">
                        @foreach ($danceclass->schedules as $schedule)
                            {{isset($schedule->start_time) ? $schedule->start_time : ''}}
                        @endforeach 
                        <br>
                        @foreach ($danceclass->schedules as $schedule)
                            {{isset($schedule->end_time) ? $schedule->end_time : ''}}
                        @endforeach 
                    </h4>
                    <h4>
                        Ritmo
                    </h4>
                    <hr>
                    <h3>
                        Qtd. Alunos
                        <br>
                        Valor Total
                    </h3>
                </div>
                
            </div>
        </div>

        <div class="col-lg-4 px-2 text-center bg-primary">
            <div class="card shadow text-center">
                <div class="card-header">
                    <h1> Add People </h1>
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

        <div class="col-lg-4 px-2 text-center bg-danger ">
            <div class="card shadow text-center">
                <div class="card-header">
                    <h1> People x class </h1>
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