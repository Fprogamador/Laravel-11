@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar Usuário <strong>{{ $user->name }}</strong></h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf()
        @method('PUT')
        <div class="field">
            <input type="text" name="name" value="{{ $user->name }}" placeholder="Nome do Usuário" required>
        </div>
        <div class="field">
            <input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail" required>
        </div>
        <div class="field">
            <input type="password" id="password" name="password" placeholder="Senha" required>
            <button type="button" id="toggle-password" >
                Mostrar
            </button>
        </div>
        <button type="submit">Salvar</button>

        {{-- @include('admin.users.partials.form') --}}

    </form>


    <script>
        const togglePassword = document.querySelector('#toggle-password');
        const passwordField = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            this.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
        });
    </script>
@endsection
