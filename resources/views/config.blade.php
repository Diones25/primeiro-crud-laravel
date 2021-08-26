@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Configurações</h1>

    @component('alert')
        Testando 123...
    @endcomponent
   
    <ul>
        @forelse ($lista as $item)
        <li>Item: {{ $item }}</li>
        @empty
            <li>Não há ingredientes</li>
        @endforelse
    </ul>

    <button class="btn btn-primary">Enviar</button>
    
    {{-- @if ($idade > 18)
        Eu sou maior de idade
    @else
        Eu não sou maior de idade
    @endif

    @isset($versao)
        Existe uma versão e é a {{ $versao }}
    @endisset

    @empty($cidade)
        Não existe uma cidade
    @endempty --}}

    <form action="" method="post">

        @csrf

        Nome: <br>
        <input type="text" name="nome" id=""> <br>
        Idade: <br>
        <input type="text" name="idade" id=""> <br>
        <input type="submit" value="Enviar">
    </form>

    <a href="/config/info">Informações</a>
@endsection