@extends('admin.layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

    <h1>Usuários</h1>

    <a href="{{ route(name: 'users.create') }}"> Novo Usuário</a>

    <x-alert />

    <table>
        <thead>
            <tr>
                <th>Nome do Usuário</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="100">Nenhum registro encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>


    {{ $users->links() }}
@endsection
