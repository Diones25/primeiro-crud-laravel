@extends('layouts.admin')

@section('title', 'Listagem de Tarefas')

@section('content')
    <div class="container">
        <h1 class="text-center">Listagem</h1>

        <a href="{{ route('tarefas.add') }}" class="btn btn-primary">Adicionar nova tarefa</a>

        @if (count($list) > 0)
            <ul>
                @foreach ($list as $item)
                    <li style="list-style: none">
                        <a href="{{ route('tarefas.done', ['id' => $item -> id]) }}"
                            @if ($item -> resolvido === 1)
                                class="btn btn-success my-2"
                            @else
                            class="btn btn-primary my-2"
                            @endif
                        >
                        @if ($item -> resolvido === 1)
                            Desmarcar
                            @else
                            Marcar
                        @endif 
                        </a>
                        {{ $item -> titulo }}

                        <a href="{{ route('tarefas.edit', ['id' => $item -> id]) }}"  class="btn btn-warning">Editar</a>
                        <a href="{{ route('tarefas.del', ['id' => $item -> id]) }}" onclick="confirm('Tem certeza que deseja excluir?')" class="btn btn-danger">Excluir</a>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="alert alert-danger" role="alert">
                Não há itens a serem listados!
            </div>
        @endif
    </div>
@endsection