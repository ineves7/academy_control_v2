@extends('admin.layouts.layout')

@section('content')
    <!-- Page Heading -->
        
        <div class="row">


        <div class="offset-lg-3 col-lg-6">

            <div class="card shadow mb-4">

                <div class="text-center my-4">
                    <h1> 
                        Editar Aluno
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

                                        value="{{ $person->birthdate }}"
                                        type="date"
                                        id="birthdate" 
                                        class="form-control" 
                                        name="birthdate"
                                        />
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="city">Cidade</label>
                                        <input 

                                        value="{{$person->address->city}}"
                                        type="text"
                                        id="city"
                                        class="form-control"
                                        name="city"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="district">Bairro</label>
                                        <input 

                                        value="{{$person->address->district}}"
                                        type="text"
                                        id="district"
                                        class="form-control"
                                        name="district"
                                        />

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class=" col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="street">Rua</label>
                                        <input 
                                        
                                        value="{{$person->address->street}}"
                                        type="text"
                                        id="street"
                                        class="form-control"
                                        placeholder="Rua"
                                        name="street"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="number">N.º</label>
                                        <input 

                                        value="{{$person->address->number}}"
                                        type="text"
                                        id="number"
                                        class="form-control"
                                        name="number"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="phone">Telefone</label>
                                        <input 

                                        value="{{$person->phone}}"
                                        type="text"
                                        class="form-control telefone" 
                                        id="phone" 
                                        name="phone"
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

                        </div>
                    </form>

                                

                    <form method="POST" name="form-delete" action="{{ route('pessoas.destroy', $person->id) }}">
                        @csrf()
                        @method('delete')
                        <button type="submit" class="my-5 btn btn-danger offset-md-4 col-md-4"
                        onclick="return confirm('Tem certeza que deseja deletar?');">Deletar
                        </button>
                    </form>
                        
                </div>

            </div>

        </div>

    </div>

@endsection