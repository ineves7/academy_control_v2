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

                    <form method="POST" action="{{ route('groups.store') }}" autocomplete="off">
                        @csrf() 

                        <div class="px-lg-2">

                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Nome da Turma</label>
                                        <input 
                                        type="text" 
                                        id="name_group" 
                                        class="form-control" 
                                        name="name_group" 
                                        placeholder="" 
                                        autofocus
                                        required
                                        />
                                        <datalist id="browsers">
                                            @foreach ($danceclasses as $danceclass)
                                                
                                            <option value="{{$danceclass->name_group}}">
                                            @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="modalidade">Ritmo</label>
                                    <select

                                    class="form-control" 
                                    name="rhythm_id" 
                                    id="rhythm_id">

                                        <option value="1">Coletivo</option>
                                        <option value="2">Particular</option>
                                        <option value="3">Coletivo e Particular</option>
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
                                    name="week_day"
                                    id="week_day"
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
                                    <label class="mb-1 mt-2 form-control-label" for="hour">Horário</label>
                                    <select

                                    class="form-control" 
                                    name="hour"
                                    id="hour"
                                    required>

                                        <option></option>
                                        <option value="1" >9:00</option>
                                        <option value="9:30" >9:30</option>
                                        <option value="10:00" >10:00</option>
                                        <option value="10:30" >10:30</option>
                                        <option value="11:00" >11:00</option>
                                        <option value="11:30" >11:30</option>
                                        <option value="12:00" >12:00</option>
                                        <option value="12:30" >12:30</option>
                                        <option value="13:00" >13:00</option>
                                        <option value="13:30" >13:30</option>
                                        <option value="14:00" >14:00</option>
                                        <option value="14:30" >14:30</option>
                                        <option value="15:00" >15:00</option>
                                        <option value="15:30" >15:30</option>
                                        <option value="16:00" >16:00</option>
                                        <option value="16:30" >16:30</option>
                                        <option value="17:00" >17:00</option>
                                        <option value="17:30" >17:30</option>
                                        <option value="18:00" >18:00</option>
                                        <option value="18:30" >18:30</option>
                                        <option value="19:00" >19:00</option>
                                        <option value="19:30" >19:30</option>
                                        <option value="20:00" >20:00</option>
                                        <option value="20:30" >20:30</option>
                                        <option value="21:00" >21:00</option>
                                    </select>
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

    </div>

@endsection