@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
        
    <div class="row">


        <div class="offset-lg-3 col-lg-6">

            <div class="card shadow mb-4">

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
                                        <option value="1">Segunda-Feira</option>
                                        <option value="2">Terça-Feira</option>
                                        <option value="3">Quarta-Feira</option>
                                        <option value="4">Quinta-Feira</option>
                                        <option value="5">Sexta-Feira</option>
                                        <option value="6">Sábado</option>
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
                                        <option value="1" >9:00</option>
                                        <option value="2" >9:30</option>
                                        <option value="3" >10:00</option>
                                        <option value="4" >10:30</option>
                                        <option value="5" >11:00</option>
                                        <option value="6" >11:30</option>
                                        <option value="7" >12:00</option>
                                        <option value="8" >12:30</option>
                                        <option value="9" >13:00</option>
                                        <option value="10" >13:30</option>
                                        <option value="11" >14:00</option>
                                        <option value="12" >14:30</option>
                                        <option value="13" >15:00</option>
                                        <option value="14" >15:30</option>
                                        <option value="15" >16:00</option>
                                        <option value="16" >16:30</option>
                                        <option value="17" >17:00</option>
                                        <option value="18" >17:30</option>
                                        <option value="19" >18:00</option>
                                        <option value="20" >18:30</option>
                                        <option value="21" >19:00</option>
                                        <option value="22" >19:30</option>
                                        <option value="23" >20:00</option>
                                        <option value="24" >20:30</option>
                                        <option value="25" >21:00</option>
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

    </div>

@endsection