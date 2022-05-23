@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
        
    <div class="row bg-primary">


        <div class="offset-lg-1 col-lg-6 my-5">

            <div class="card shadow my-5">

                <div class="text-center my-4">
                    <h1> 
                        Cadastrar Turma
                    </h1>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('turmas.store') }}" autocomplete="off">
                        @csrf() 

                        <div class="px-lg-2">

                            <div class="row mb-2">
                                <div class="col-lg-4">
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
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="modalidade">Ritmo</label>
                                    <select

                                    class="form-control" 
                                    name="rhythm_id" 
                                    id="rhythm_id">

                                        <option></option>

                                        @foreach ($rhythms as $rhythm)
                                                    
                                            <option value="{{$rhythm->id}}">{{$rhythm->rhythm}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class=" col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="level_id">Nivel</label>
                                    <select

                                    class="form-control" 
                                    name="level_id" 
                                    id="level_id">

                                        <option></option>
                                        <option value="1">Iniciante</option>
                                        <option value="2">Intermediário</option>
                                        <option value="3">Avançado</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="offset-lg-2 col-lg-4 ">
                                    <label class=" mb-1 mt-2 mb-1 form-control-label" for="week_day">Dias de Aula</label>
                                    <select

                                    class="form-control" 
                                    name="weekday_id"
                                    id="weekday_id"
                                    required>

                                    <option></option>

                                    @foreach ($weekdays as $weekday)
                                                    
                                        <option value="{{$weekday->id}}">{{$weekday->weekday}}</option>

                                    @endforeach

                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="mb-1 mt-2 form-control-label" for="hour_id">Horário</label>
                                    <select

                                    class="form-control" 
                                    name="hour_id"
                                    id="hour_id"
                                    required>

                                        <option></option>

                                    @foreach ($hours as $hour)
                                                    
                                        <option value="{{$hour->id}}">{{$hour->hour}}</option>

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
        <div class="col-lg-4 my-5">
            <div class="card shadow my-5">
                <table class="table">
                    <thead class="">
                        <tr>
                            <th scope="col">Turmas Cadastradas</th>
                            <th scope="col">Dia/Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($danceclasses as $danceclass)
                            <tr>
                                <th scope="row">{{$danceclass->name_danceclass}}</th>
                                <td>{{$danceclass->weekday}} {{$danceclass->hour}}</td>
                                <td><a href="{{route ('pessoas.show', $danceclass->id)}}" class="btn btn-outline-dark">Editar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>

    </div>

@endsection