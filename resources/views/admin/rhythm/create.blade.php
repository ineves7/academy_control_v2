@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
        
    <div class="row">


        <div class="offset-lg-2 col-lg-8">

            <div class="card shadow mb-4">

                <div class="row">
                    <div class=" offset-lg-4 col-lg-4 text-center my-4">
                        <h1> 
                            RITMOS
                        </h1>
                    </div>
                </div>

                <div class="row card-body">

                    <!-- Register Rhythm -->
                        <div class="col-lg-6">
                            <div class="text-center my-4">
                                <h3> 
                                Cadastrar
                                </h3>
                            </div>
                            <form method="POST" action="{{ route('ritmos.store') }}" autocomplete="off">
                                @csrf() 

                                <div class="px-lg-2">

                                    <div class="row mb-2">
                                        <div class="offset-lg-2 col-lg-8">
                                            <div class="form-group focused">
                                                <label class=" mb-1 mt-2 form-control-label" for="rhythm">Nome do Ritmo</label>
                                                <input 
                                                type="text" 
                                                id="rhythm" 
                                                class="form-control" 
                                                name="rhythm" 
                                                placeholder="" 
                                                autofocus
                                                required
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
                    
                    <!-- End Register Rhythm -->

                    <!-- Index Rhythms -->
                        <div class="col-lg-6">
                            <div class="text-center my-4">
                                <h3> 
                                Cadastrados
                                </h3>
                            </div>
                            <table class="table offset-lg-1 col-lg-10 border ">
                                
                                <tbody>
                                    
                                    @foreach ($rhythms as $rhythm)
                                        <tr>
                                            <th scope="row">{{$rhythm->rhythm}}</th>
                                            <th scope="row">
                                                <div class="">
                                                    <form method="POST" name="form-delete" action="{{ route('ritmos.destroy', $rhythm->id) }}">
                                                        @csrf()
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Tem certeza que deseja deletar?');">Deletar
                                                        </button>
                                                    </form>
                                                </div>
                                            
                                            </th>
                                            {{-- <td><a href="{{route ('pessoas.show', $person->id)}}" class="btn btn-outline-dark">Editar</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    <!-- End Index Rhythms -->

                </div>

        </div>

    </div>

@endsection