@extends('layouts.admin')

@section('main-content')

<section id="multiple-column-form ">
    <div class="row mx-3">
        <div class="col-12">
            <div class="card border-0">
                <div class=" text-center border-0 my-4" style="letter-spacing:1.5px; font-size: 100px">
                    <h4 class=" text-white m-0">Consultar</h4>
                </div>

                <h1> Turmas Cadastradas</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome da Turma</th>
                            <th scope="col">Alunos</th>
                            <th scope="col">Dias</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Ritmo</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Rendimento</th>
                            <th scope="col">Sistema</th>

                        </tr>
                    </thead>
                    <tbody>
                          
                        @foreach ($danceclasses as $danceclass)
                            <tr>
                                <th scope="row">{{$danceclass->name_danceclass}}</th>
                                <td>{{$danceclass->name_danceclass}}</td>
                                <td>#</td>
                                <td>{{$danceclass->weekday}}</td>
                                <td>{{$danceclass->hour}}</td>
                                <td>{{$danceclass->rhythm}}</td>
                                <td>{{$danceclass->level}}</td>
                                <td><a href="{{route ('turmas.show', $danceclass->id)}}" class="btn btn-outline-dark">Editar</a>
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