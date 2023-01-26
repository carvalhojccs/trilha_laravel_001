@extends('layouts.app')
@section('title', 'Listagem dos usuários')
@section('content')
    <h1>
        Listagem dos usuários
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    @foreach ($users as $user)
        <ul>
            <li>
                {{ $user->name }} - {{ $user->email }}
                | <a href="{{ route('users.show', $user->id) }}">Ver</a>
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </li>
        </ul>
    @endforeach
@endsection
