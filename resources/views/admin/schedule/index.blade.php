@extends('layouts.admin')

@section('main-content')

<section id="multiple-column-form ">
    <div class="row mx-3">
        <div class="col-12">
            <div class="card border-0">
                <div class=" text-center border-0 my-4" style="letter-spacing:1.5px; font-size: 100px">
                    <h4 class=" text-white m-0">Agenda Semanal</h4>
                </div>
                <h1> 
                    Agenda
                </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">__________</th>
                            <th scope="col">Segunda-Feira</th>
                            <th scope="col">Terça-Feira</th>
                            <th scope="col">Quarta-Feira</th>
                            <th scope="col">Quinta-Feira</th>
                            <th scope="col">Sexta-Feira</th>
                            <th scope="col">Sábado</th>
                            <th scope="col">Domingo</th>
                        </tr>
                    </thead>
                    <tbody>

                        
                        @foreach ($hours as $hour)

                            <tr>
                                {{-- Hour --}}
                                <th scope="row">{{$hour->hour}}</th>
                                {{-- Segunda-Feira --}}
                                <td>

                                </td>
                                {{-- Terça-Feira --}}
                                <td>2</td>
                                {{-- Quarta-Feira --}}
                                <td>3</td>
                                {{-- Quinta-Feira --}}
                                <td>4</td>
                                {{-- Sexta-Feira --}}
                                <td>5</td>
                                {{-- Sábado --}}
                                <td>6</td>
                                {{-- Domingo --}}
                                <td>7</td>
                            </tr>

                        @endforeach

                        

                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</section>

@endsection