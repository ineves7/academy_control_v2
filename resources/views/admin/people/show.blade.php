@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
        
        <div class="row">


        <div class="offset-lg-3 col-lg-6">

            <div class="card shadow mb-4">

                <div class="text-center my-4">
                    <h1> 
                        Consultar Alunos
                    </h1>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('pessoas.update', $person->id) }}" autocomplete="off">
                    @csrf()
                        @method('PUT')

                        <div class="px-lg-2">
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Name</label>
                                        <input 

                                        value="{{$person->name}}"
                                        type="text" 
                                        id="name" 
                                        class="form-control" 
                                        name="name" 
                                        placeholder="" 
                                        autofocus
                                        required
                                        oninvalid="this.setCustomValidity('Seu aluno tem que ter um nome')"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Status</label>
                                    <select

                                    class="form-control" 
                                    name="status_id"
                                    id="status_id">

                                    <option value="1" {{ $person->status_id == 1 ? 'selected' : '' }}>Ativo</option>
                                    <option value="2" {{ $person->status_id == 2 ? 'selected' : '' }}>Inativo</option>

                                    </select>
                                </div>
                            </div>

                        <!--
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Modalidade</label>
                                    <select
                                     class="form-control" id="exampleFormControlSelect1">
                                    <option value="1" {{ $person->modality_id == 1 ? 'selected' : '' }}>Coletivo</option>
                                    <option value="2" {{ $person->modality_id == 2 ? 'selected' : '' }}>Particular</option>
                                    <option value="3" {{ $person->modality_id == 3 ? 'selected' : '' }}>Coletivo e Particular</option>
                                    </select>
                                </div>
                                <div class="offset-lg-2 col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Turma</label>
                                    <select
                                     class="form-control" id="exampleFormControlSelect1">
                                        <option  value="">A1</option>
                                        <option  value="">A2</option>
                                        <option  value="">B1</option>
                                        <option  value="">B2</option>
                                        <option  value="">B3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Modalidade</label>
                                    <select
                                     class="form-control" id="exampleFormControlSelect1">
                                        <option  value="">Coletivo</option>
                                        <option  value="">Particular</option>
                                        <option  value="">Coletivo e Particular</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Dia</label>
                                    <select
                                     class="form-control" id="exampleFormControlSelect1">
                                        <option value="1" >Segunda-Feira</option>
                                        <option value="2" >Terça-Feira</option>
                                        <option value="3" >Quarta-Feira</option>
                                        <option value="4" >Quinta-Feira</option>
                                        <option value="5" >Sexta-Feira</option>
                                        <option value="6" >Sábado</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Horário</label>
                                    <select
                                     class="form-control" id="exampleFormControlSelect1">
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
                        --> 
                            <div class="row mb-4">
                                <div class="col-lg-4 ">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Modalidade</label>
                                    <select

                                    class="form-control" 
                                    name="modality_id"
                                    id="modality_id">

                                    <option value="1" {{ $person->modality_id == 1 ? 'selected' : '' }} >Coletivo</option>
                                    <option value="2" {{ $person->modality_id == 2 ? 'selected' : '' }}>Particular</option>
                                    <option value="3" {{ $person->modality_id == 3 ? 'selected' : '' }}>Coletivo e Particular</option>

                                    </select>
                                </div>
                                <div class="col-lg-3 ps-5">
                                    <label class=" mb-1 mt-2 mb-1 form-control-label" for="name">Dia</label>
                                    <select

                                    class="form-control" 
                                    name="weekday_id"
                                    id="weekday_id">

                                    <option value="1" >Segunda-Feira</option>
                                    <option value="2" >Terça-Feira</option>
                                    <option value="3" >Quarta-Feira</option>
                                    <option value="4" >Quinta-Feira</option>
                                    <option value="5" >Sexta-Feira</option>
                                    <option value="6" >Sábado</option>

                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Horário</label>
                                    <select

                                    class="form-control" 
                                    name="hour_id"
                                    id="hour_id">

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
                                <div class="col-lg-2">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Turma</label>
                                    <select

                                    class="form-control" 
                                    name="group_id" 
                                    id="group_id">

                                        <option value="1" {{ $person->group_id == 1 ? 'selected' : '' }}>A1</option>
                                        <option value="2" {{ $person->group_id == 2 ? 'selected' : '' }}>A2</option>
                                        <option value="3" {{ $person->group_id == 3 ? 'selected' : '' }}>B1</option>
                                        <option value="4" {{ $person->group_id == 4 ? 'selected' : '' }}>B2</option>
                                        <option value="5" {{ $person->group_id == 5 ? 'selected' : '' }}>B3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class=" col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Nivel</label>
                                    <select

                                    class="form-control" 
                                    name="level_id" 
                                    id="level_id">
                                    
                                        <option value="1" {{ $person->level_id == 1 ? 'selected' : '' }}>Iniciante</option>
                                        <option value="2" {{ $person->level_id == 2 ? 'selected' : '' }}>Intermediário</option>
                                        <option value="3" {{ $person->level_id == 3 ? 'selected' : '' }}>Avançado</option>
                                    </select>
                                </div>
                                <div class=" col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Genero</label>
                                    <select


                                    class="form-control" 
                                    name="genre_id" 
                                    id="genre_id">

                                        <option value="1" {{ $person->genre_id == 1 ? 'selected' : '' }}>Feminino</option>
                                        <option value="2" {{ $person->genre_id == 2 ? 'selected' : '' }}>Masculino</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="name">Data de Nasc.</label>
                                    <div class="input-group input-group-joined">
                                        <input 

                                        value="{{ $person->data_de_nascimento }}"
                                        type="date"
                                        id="data_de_nascimento" 
                                        class="form-control" 
                                        name="data_de_nascimento"
                                        />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Cidade</label>
                                        <input 

                                        value="{{$person->address->cidade}}"
                                        type="text"
                                        id="cidade"
                                        class="form-control"
                                        placeholder="Cidade"
                                        name="cidade"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Bairro</label>
                                        <input 

                                        value="{{$person->address->bairro}}"
                                        type="text"
                                        id="bairro"
                                        class="form-control"
                                        placeholder="Bairro"
                                        name="bairro"
                                        />

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class=" col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Rua</label>
                                        <input 
                                        
                                        value="{{$person->address->rua}}"
                                        type="text"
                                        id="rua"
                                        class="form-control"
                                        placeholder="Rua"
                                        name="rua"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Numero</label>
                                        <input 

                                        value="{{$person->address->numero}}"
                                        type="text"
                                        id="numero"
                                        class="form-control"
                                        placeholder="N.º"
                                        name="numero"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Telefone</label>
                                        <input 

                                        value="{{$person->address->telefone}}"
                                        type="text"
                                        class="form-control telefone" 
                                        placeholder="Telefone" 
                                        id="telefone" 
                                        name="telefone"
                                        />

                                    </div>
                                </div>
                            </div>

                            <div class="text-center mb-3">
                            <h2> 
                                Mensalidade
                            </h2>
                            </div>

                            <div class="row mb-3 text-center">
                                <div class="offset-lg-3 col-lg-3 ">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Dia</label>
                                        <input 

                                        value="{{$person->dia_mensalidade}}"
                                        type="text"
                                        id="dia_mensalidade"
                                        class="form-control"
                                        placeholder=""
                                        name="dia_mensalidade"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Valor</label>
                                        <input 

                                        value="{{$person->valor_mensalidade}}"
                                        type="enum"
                                        id="valor_mensalidade"
                                        class="form-control"
                                        placeholder=""
                                        name="valor_mensalidade"
                                        />

                                    </div>
                                </div>
                            </div>

                                <!-- Button -->
                            <div class="row mb-2">
                                <div class="offset-lg-3 col-lg-6">
                                    <button type="submit" class="btn btn-primary btn-lg col-12">Confirmar Alteração</button>
                                </div>
                            </div>

                            <form method="POST" name="form-delete" action="{{ route('pessoas.destroy', $person->id) }}">
                                @csrf()
                                @method('delete')
                                <button type="submit" class="my-5 btn btn-danger offset-md-4 col-md-4"
                                onclick="return confirm('Tem certeza que deseja deletar?');">Deletar
                                </button>
                            </form>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection