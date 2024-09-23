@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}" placeholder="Nome do Usuário">
        <input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Salvar</button>
    </form>

@endsection
