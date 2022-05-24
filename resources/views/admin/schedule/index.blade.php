@extends('layouts.admin')

@section('main-content')

<section id="multiple-column-form ">
    <div class="row mx-3">
        <div class="col-12">
            <div class="card border-0">
                <div class=" text-center border-0 my-4" style="letter-spacing:1.5px; font-size: 100px">
                    <h4 class=" text-white m-0">Agenda Semanal</h4>
                </div>

                <h1> Usuários: {{count($people)}} </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Turma</th>
                            <th scope="col">Dias</th>
                            <th scope="col">Hora Inicio</th>
                            <th scope="col">Hora Fim</th>
                        </tr>
                    </thead>
                    <tbody>
                          
                        @foreach ($schedules as $schedule)
                            <tr>
                                <th scope="row">{{$schedule->danceclass}}</th>
                                <td>{{$schedule->week_day}}</td>
                                <td>{{$schedule->start_time}}</td>
                                <td>{{$schedule->end_time}}</td>
                                {{-- <td><a href="{{route ('pessoas.show', $person->id)}}" class="btn btn-outline-dark">Editar</a> --}}
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