@extends('layouts.admin')

@section('main-content')

<section id="multiple-column-form ">
    <div class="row mx-3">
        <div class="col-12">
            <div class="card border-0">

                <div class="row">
                    @foreach ($danceclasses as $danceclass)
                        @if ($danceclass->private_class == false)

                            
                            <div class="col-lg-4 px-2 my-2 ">
                                <a href="{{route ('turmas.show', $danceclass->id)}}" class="text-decoration-none">
                                <div class="card shadow text-center">
                                    <div class="card-head mt-1">
                                        <h1> 
                                            {{$danceclass->name_danceclass}} 
                                        </h1>
                                    </div>
                                    <div class="card-body">
                                        <h2> 
                                            @foreach ($danceclass->schedules as $schedule)
                                                {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                                            @endforeach
                                            @foreach ($danceclass->schedules as $schedule)
                                                {{isset($schedule->week_day) ? $schedule->week_day : ''}}
                                            @endforeach 
                                        </h2>
                                        <h3>
                                            @foreach ($danceclass->schedules as $schedule)
                                                {{isset($schedule->start_time) ? $schedule->start_time : ''}}
                                            @endforeach
                                        </h3>
                                        <h3>
                                            @foreach ($danceclass->schedules as $schedule)
                                                {{isset($schedule->end_time) ? $schedule->end_time : ''}}
                                            @endforeach
                                        </h3>
                                    </div>
                                </div>
                                </a>
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