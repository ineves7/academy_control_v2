@extends('layouts.admin')

@section('main-content')

<section id="multiple-column-form ">
    <div class="row mx-3">
        <div class="col-12">
            <div class="card border-0">
                <div class=" text-center border-0 my-4" style="letter-spacing:1.5px; font-size: 100px">
                    <h4 class=" text-white m-0">Consultar</h4>
                </div>

                <h1> Usuários: {{count($people)}} </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Status</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Sistema</th>
                        </tr>
                    </thead>
                    <tbody>
                          
                        @foreach ($people as $person)
                            <tr>
                                <th scope="row">{{$person->id}}</th>
                                <td>{{$person->name}}</td>
                                <td>{{$person->danceclass->name_danceclass}}</td>
                                <td>{{$person->modality->modality}}</td>
                                <td>{{$person->level->level}}</td>
                                <td>{{$person->monthly_payment}}</td>
                                <td>{{$person->status->status}}</td>
                                <td>{{$person->address->city}}</td>
                                <td><a href="{{route ('pessoas.show', $person->id)}}" class="btn btn-outline-dark">Editar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</section>

@endsection