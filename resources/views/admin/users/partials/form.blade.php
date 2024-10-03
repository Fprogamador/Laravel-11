<x-error-messages />

@csrf()
<input type="text" name="name" value="{{ $user->name ?? old('name') }}" placeholder="Nome do Usuário">
<input type="emal" name="email" value="{{ $user->email ?? old('email') }}" placeholder="E-mail">
<input type="password" name="password" placeholder="Senha" required>
<button type="submit">Enviar</button>