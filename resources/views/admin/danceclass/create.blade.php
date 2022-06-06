@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->

    <div class="text-center my-5">
        <h1 class="display-5 text-secondary"> 
            Cadastrar Turmas
        </h1>
    </div>
        
    <div class="row">


        <div class="offset-lg-1 col-lg-6">

            <div class="card shadow">

                <div class="card-body">

                    <form method="POST" action="{{ route('turmas.store') }}" autocomplete="off">
                        @csrf() 

                        <div class="px-lg-2">

                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name_danceclass">Nome da Turma</label>
                                        <input 
                                        type="text" 
                                        id="name_danceclass" 
                                        class="form-control" 
                                        name="name_danceclass" 
                                        placeholder="" 
                                        autofocus
                                        required
                                        />
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="private_class">Modalidade</label>
                                    <select

                                    class="form-control" 
                                    name="private_class" 
                                    id="private_class">

                                        <option value="0">Coletivo</option>
                                        <option value="1">Particular</option>

                                    </select>
                                </div>
                                
                            </div>

                            <div class="row mb-4">
                                <div class="col-lg-4 ">
                                    <label class=" mb-1 mt-2 mb-1 form-control-label " for="week_days">Dias de Aula</label>
                                    <select
                                    
                                    class="form-control js-example-basic-multiple" 
                                    name="week_days[]"
                                    id="week_days"
                                    required
                                    multiple="multiple"
                                    required
                                    >

                                    @foreach ($week_days as $week_day)
                                                    
                                        <option value="{{$week_day->week_day}}">{{$week_day->week_day}}</option>

                                    @endforeach

                                    </select>

                                    
                                </div>
                                <div class="col-lg-4">
                                    <label class="mb-1 mt-2 form-control-label" for="start_time">Horário inicio</label>
                                    <select

                                    class="form-control" 
                                    name="start_time"
                                    id="start_time"
                                    required>

                                    @foreach ($hours as $hour)
                                                    
                                        <option value="{{$hour->hour}}">{{$hour->hour}}</option>

                                    @endforeach 


                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="mb-1 mt-2 form-control-label" for="end_time">Horário De término</label>
                                    <select

                                    class="form-control" 
                                    name="end_time"
                                    id="end_time"
                                    required
                                    >

                                    @foreach ($hours as $hour)
                                                    
                                        <option value="{{$hour->hour}}">{{$hour->hour}}</option>

                                    @endforeach 

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="offset-lg-2 col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="level_id">Nivel</label>
                                    <select

                                    class="form-control" 
                                    name="level_id" 
                                    id="level_id">

                                    @foreach ($levels as $level)
                                                
                                        <option value="{{$level->id}}">{{$level->level}}</option>

                                    @endforeach 

                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="modalidade">Ritmo</label>
                                    <select

                                    class="form-control" 
                                    name="rhythm_id" 
                                    id="rhythm_id"
                                    required>

                                        <option></option>

                                        @foreach ($rhythms as $rhythm)
                                                    
                                            <option value="{{$rhythm->id}}">{{$rhythm->rhythm}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        

                            <!-- Button -->
                            <div class="b-2">
                                <div class="offset-lg-3 col-lg-6">
                                    <button type="submit" class="btn btn-primary btn-lg col-12">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
        <div class="col-lg-4">
            <div class="card shadow">
                <table class="table">   
                    <thead class="">
                        <div class="text-center my-3 text-success">
                            <h3 class="">Turmas Cadastradas</h3>
                        </div>
                    </thead>
                    <tbody>
                        
                        @foreach ($danceclasses as $danceclass)
                            <tr class="text-center">
                                <th scope="row">{{$danceclass->name_danceclass}}</th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection