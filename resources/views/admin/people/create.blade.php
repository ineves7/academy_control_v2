@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
        
        <div class="row">


        <div class="offset-lg-3 col-lg-6">

            <div class="card shadow mb-4">

                <div class="text-center my-4">
                    <h1> 
                        Cadastrar Aluno
                    </h1>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('pessoas.store') }}" autocomplete="off">
                        @csrf() 

                        <div class="px-lg-2">

                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="name">Name</label>
                                        <input 
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
                                    <label class=" mb-1 mt-2 form-control-label" for="status">Status</label>
                                    <select

                                    class="form-control" 
                                    name="status_id"
                                    id="status_id">

                                        <option value="1">Ativo</option>
                                        <option value="2">Inativo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class=" col-lg-4">
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
                                <div class=" col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="genre_id">Genero</label>
                                    <select


                                    class="form-control" 
                                    name="genre_id" 
                                    id="genre_id">

                                    @foreach ($genres as $genre)
                                                
                                        <option value="{{$genre->id}}">{{$genre->genre}}</option>

                                    @endforeach

                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class=" mb-1 mt-2 form-control-label" for="birthdate">Data de Nasc.</label>
                                    <div class="input-group input-group-joined">
                                        <input 

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

                                        type="text"
                                        id="district"
                                        class="form-control"
                                        name="district"
                                        />

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class=" col-lg-5">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="rua">Rua</label>
                                        <input 

                                        type="text"
                                        id="street"
                                        class="form-control"
                                        name="street"
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group focused">
                                        <label class=" mb-1 mt-2 form-control-label" for="numero">N.º</label>
                                        <input 

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

                                        type="enum"
                                        data-mask="(00) 00000-0000"
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

<script>

$(document).ready(function() {
    $('.telefone').mask("(99) 99999-9999");
});

</script>