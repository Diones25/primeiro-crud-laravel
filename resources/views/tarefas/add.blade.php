@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('content')
    <div class="container">
        <h1 class="text-center">Adição</h1>

        @if ($errors -> any())
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors -> all() as $error)
                            {{ $error }} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
                    </div>
                    <input type="submit" class="btn btn-success" value="Adicionar">
                </form>
            </div>
        </div>
    </div>
@endsection