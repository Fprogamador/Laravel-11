<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    // Método responsável por listar todos os usuários paginados
    public function index()
    {
        // Recupera todos os usuários de forma paginada
        $users = User::paginate();

        // Retorna a view de listagem, passando os usuários como dados
        return view('admin.users.index', ['users' => $users]);
    }

    // Exibe o formulário de criação de um novo usuário
    public function create()
    {
        return view('admin.users.create');
    }

    // Armazena um novo usuário no banco de dados
    public function store(StoreUserRequest $request)
    {
        // Cria o usuário com os dados validados da request
        User::create($request->validated());

        // Redireciona para a listagem com uma mensagem de sucesso
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso!');
    }

    // Exibe o formulário de edição de um usuário específico
    public function edit($id)
    {
        // Encontra o usuário pelo ID ou retorna uma mensagem de erro
        $user = User::find($id);

        if (!$user) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Usuário não encontrado!');
        }

        // Retorna a view de edição com os dados do usuário
        return view('admin.users.edit', ['user' => $user]);
    }

    // Atualiza os dados de um usuário específico no banco de dados
    public function update(UpdateUserRequest $request, $id)
    {
        // Encontra o usuário pelo ID ou retorna uma mensagem de erro

        if (!$user = $user = User::find($id)) {
            return back()->with('error', 'Usuário não encontrado!');
        }

        // Valida os dados da request
        $data = $request->only('name', 'email');
        
        // Se o campo de senha estiver presente, faz o hash da senha
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        // Atualiza os dados do usuário no banco de dados
        $user->update($data);

        // Redireciona para a listagem com uma mensagem de sucesso
        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário editado com sucesso!');
    }
}
