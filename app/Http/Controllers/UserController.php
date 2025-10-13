<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
{
    return view('app.usuario'); // Certifique-se de que o arquivo usuario.blade.php está em resources/views
}

public function store(Request $request)
{
    // Validação dos dados recebidos
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        'email_verified_at' => 'nullable|date',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable|date',
        'updated_at' => 'nullable|date',
    ]);

    // Inserção dos dados na tabela users
    \App\Models\User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']), // Criptografa a senha
        'email_verified_at' => $validated['email_verified_at'] ?? null,
        'remember_token' => $validated['remember_token'] ?? null,
        'created_at' => $validated['created_at'] ?? now(),
        'updated_at' => $validated['updated_at'] ?? now(),
    ]);

    // Redireciona de volta ao formulário com uma mensagem de sucesso
    return redirect()->route('usuarios.create')->with('success', 'Usuário criado com sucesso!');
}




}
