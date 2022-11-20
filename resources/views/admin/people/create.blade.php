@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->

    <div class="text-center my-5">
        <h1 class="display-5 text-secondary"> 
            Cadastrar Aluno
        </h1>
    </div>
        
        <div class="row">
            
        <div class="offset-lg-1 col-lg-6 mt-3">

            <div class="card shadow">

                <div class="card-body">

                    <form method="POST" action="{{ route('pessoas.store') }}" autocomplete="off">
                        @csrf()

                        <div class="px-lg-2">

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="mb-1 ml-1 ml-1 form-control-label" for="name">Nome do Aluno</label>
                                        <input 
                                        type="text" 
                                        id="name" 
                                        class="form-control" 
                                        name="name" 
                                        placeholder="" 
                                        autofocus
                                        required
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="status_id">Status</label>
                                        <select
                                        class="form-control" 
                                        name="status_id"
                                        id="status_id">

                                            <option value="1">Ativo</option>
                                            <option value="2">Inativo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class=" col-lg-4">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="level_id">Nivel</label>
                                        <select

                                        class="form-control" 
                                        name="level_id" 
                                        id="level_id">
                                        
                                        @foreach ($levels as $level)
                                                    
                                            <option value="{{$level->id}}">{{$level->level}}</option>

                                        @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="genre_id">Genero</label>
                                        <select


                                        class="form-control" 
                                        name="genre_id" 
                                        id="genre_id">

                                        @foreach ($genres as $genre)
                                                    
                                            <option value="{{$genre->id}}">{{$genre->genre}}</option>

                                        @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="birthdate">Data de Nasc.</label>
                                        <div class="input-group input-group-joined">
                                            <input 

                                            type="date"
                                            id="birthdate" 
                                            class="form-control" 
                                            name="birthdate"
                                            required
                                            />
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="city">Cidade</label>
                                        <input 

                                        type="text"
                                        id="city"
                                        class="form-control"
                                        name="city"
                                        required
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="district">Bairro</label>
                                        <input 

                                        type="text"
                                        id="district"
                                        class="form-control"
                                        name="district"
                                        required
                                        />

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class=" col-lg-5">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="rua">Rua</label>
                                        <input 

                                        type="text"
                                        id="street"
                                        class="form-control"
                                        name="street"
                                        required
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="numero">N.º</label>
                                        <input 

                                        type="text"
                                        id="number"
                                        class="form-control"
                                        name="number"
                                        required
                                        />

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class=" mb-1 ml-1 form-control-label" for="phone">Telefone</label>
                                            <input 

                                            type="enum"
                                            data-mask="(00) 00000-0000"
                                            class="form-control telefone" 
                                            id="phone" 
                                            name="phone"
                                            required
                                            />

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-lg-4 offset-lg-2">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="start_date">Data de Início</label>
                                        <div class="input-group input-group-joined">
                                            <input 

                                            type="date"
                                            id="start_date" 
                                            class="form-control" 
                                            name="start_date"
                                            required
                                            />
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="category_id">Categoria</label>
                                        <select

                                        class="form-control" 
                                        name="category_id" 
                                        id="category_id">
                                        
                                        @foreach ($categories as $category)
                                                    
                                            <option value="{{$category->id}}">{{$category->category}}</option>

                                        @endforeach

                                        </select>
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
        <div class="col-lg-4 mt-3">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h3 class="m-0 font-weight-bold text-primary" style="font-size:20px">Ultimos Alunos Cadastrados</h3>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    @foreach($peoples as $people)
                        <div class="ml-4 mt-3 mb-2">
                            <p><strong>{{$people->name}}</strong></p>
                        </div>
                    <hr>
                    @endforeach
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