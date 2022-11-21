@extends('admin.layouts.layout')

@section('content')
    <!-- Page Heading -->
        
    <div class="text-center my-5">
        <h1 class="display-5 text-secondary"> 
            Cadastrar Categoria
        </h1>
    </div>

    <div class="row">

        <div class="offset-lg-2 col-lg-4">

            <div class="card shadow mb-4">

                <div class="row card-body">

                    <!-- Register Rhythm -->
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('categorias.store') }}" autocomplete="off">
                                @csrf() 

                                <div class="px-lg-2">

                                    <div class="row mb-2">
                                        <div class="offset-lg-2 col-lg-8">
                                            <div class="form-group focused">
                                                <label class=" mb-1 mt-2 form-control-label" for="category">Nome da Categoria</label>
                                                <input 
                                                type="text" 
                                                id="category" 
                                                class="form-control" 
                                                name="category" 
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
                </div>

        </div>

    </div>
    <div class="col-lg-4">
        <div class="card shadow">
            <table class="table">   
                <thead class="">
                    <div class="text-center my-3 text-success">
                        <h3 class="">Categorias Cadastradas</h3>
                    </div>
                </thead>
                <tbody>
                    
                    @foreach ($categories as $category)
                        <tr class="text-center">
                            <th scope="row">{{$category->category}}</th>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection