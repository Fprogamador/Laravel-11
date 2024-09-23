@extends('admin.layouts.app')

@section('title', 'Criar Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    <x-error-messages />

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome do Usuário">
        <input type="emal" name="email" value="{{ old('email') }}" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
