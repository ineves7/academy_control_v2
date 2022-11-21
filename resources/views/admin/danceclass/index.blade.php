@extends('admin.layouts.layout')

@section('content')

<section id="multiple-column-form ">

    <div class="text-center my-5">
                    <h1 class="display-5 text-secondary"> 
                        Turmas Cadastradas
                    </h1>
                </div>
    <div class="row mx-3">
        <div class="col-12 ">
            <div class="card border-0 bg-transparent">
                <div class="row">

                    @foreach ($danceclasses as $danceclass)
                        @if ($danceclass->private_class == false)

                    <div class="col-lg-4 px-2 mt-4 text-center ">
                        <a href="{{route ('gerenciar_turmas.show', $danceclass->id)}}" class="text-decoration-none">
                        <div class="card shadow text-center">
                            <div class="card-header">
                                <h1 class="text-dark"> 
                                    {{$danceclass->name_danceclass}} 
                                </h1>
                            </div>
                            <div class="card-body">
                                @foreach($danceclass->schedules as $schedule)
                                <h3 class="text-info"> 
                                    {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                                </h3>
                                <h4 class=" mb-4 text-muted">
                                    {{isset($schedule->start_time) ? $schedule->start_time : ''}}
                                    Às
                                    {{isset($schedule->end_time) ? $schedule->end_time : ''}}
                                    
                                </h4>
                                @endforeach 
                                <hr>
                                <h4 class="text-dark">
                                    Ritmo
                                </h4>
                                <hr>
                                <h3>
                                    Alunos:  {{count($danceclass->people)}}
                                    <br>
                                    Valor Total
                                </h3>
                            </div>
                            
                        </div>
                    </div>

                    @endif
                    @endforeach
                </div>


                        {{-- @foreach ($danceclasses as $danceclass)
                            <tr>
                                <th scope="row">{{$danceclass->name_danceclass}}</th>
                                <td> 
                                    @foreach ($danceclass->schedules as $schedule)
                                        {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                                    @endforeach
                                </td>
                                <td> 
                                    @foreach ($danceclass->schedules as $schedule)
                                        {{isset($schedule->start_time) ? $schedule->start_time : ''}}
                                    @endforeach
                                </td>
                                <td> 
                                    @foreach ($danceclass->schedules as $schedule)
                                        {{isset($schedule->end_time) ? $schedule->end_time : ''}}
                                    @endforeach
                                </td>
                                <td>
                                    {{$danceclass->rhythm}}
                                </td>
                                <td>
                                    <a href="{{route ('turmas.show', $danceclass->id)}}" class="btn btn-outline-dark">Editar</a>
                                </td>
                            </tr>
                        @endforeach --}}
                
            </div>
        </div>
    </div>
</section>

@endsection