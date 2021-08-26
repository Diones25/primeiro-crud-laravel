@extends('layouts.admin')

@section('title', 'Edição de Tarefas')

@section('content')
    <div class="container">
        <h1 class="text-center">Edição</h1>

        @if (session('warning'))
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="alert alert-danger" role="alert">
                        {{ session('warning') }}
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
                        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $data -> titulo }}">
                    </div>
                    <input type="submit" class="btn btn-success" value="Editar">
                </form>
            </div>
        </div>
    </div>
@endsection