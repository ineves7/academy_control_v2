@extends('admin.layouts.layout')

@section('content')
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="mb-1 ml-1 ml-1 form-control-label" for="name">Nome</label>
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
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="mb-1 ml-1 ml-1 form-control-label" for="name">Sobrenome</label>
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
                            </div>

                            <div class="row mb-2">
                                <div class=" col-lg-4">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="level_people">Nivel</label>
                                        <select

                                        class="form-control"
                                        name="level_people"
                                        id="level_people">

                                            <option value="INICIANTE">Iniciante</option>
                                            <option value="INTERMEDIÁRIO">Intermediário</option>
                                            <option value="AVANCADO">Avançado</option>

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

                            <div class="row p-0">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class=" mb-1 ml-1 form-control-label" for="email">Email</label>
                                            <input

                                            type="enum"
                                            data-mask="(00) 00000-0000"
                                            class="form-control telefone"
                                            id="email"
                                            name="email"
                                            required
                                            />

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
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

                            <div class="row mb-5  mt-4">
                                <div class="col-lg-4 offset-md-2">
                                    <div class="form-group">
                                        <label class=" mb-1 ml-1 form-control-label" for="active">Ativo</label>
                                        <select
                                        class="form-control"
                                        name="active"
                                        id="active">

                                            <option value="0">Ativo</option>
                                            <option value="1">Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
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
                    <div class="mt-3 d-flex flex-row ml-1">
                        <i class="fas fa-check ml-4 mt-1 mr-2 fa-1x" style="color: #74c574;"></i>
                            <p><strong>{{$people->name}}</strong></p>
                        </div>
                    <hr class="mt-0">
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
