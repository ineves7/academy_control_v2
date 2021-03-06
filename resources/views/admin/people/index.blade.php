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
                            <th scope="col">Nome</th>
                            <th scope="col">Turma/Valor</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Status</th>
                            <th scope="col">Sistema</th>
                        </tr>
                    </thead>
                    <tbody>
                          
                        @foreach ($people as $person)
                            <tr>
                                <th scope="row">{{$person->name}}</th>

                                
                                <td>
                                    @foreach ($person->danceclasses as $personclass)
                                        {{$personclass->name_danceclass . ' / R$ ' . $personclass->pivot->monthly_payment}},00 <br>
                                    @endforeach
                                
                                </td>
                                <td>{{$person->level->level}}</td>
                                <td>{{$person->status->status}}</td>
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