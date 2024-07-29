<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        // Validar os dados recebidos do formulário
        $request->validate([
            'username' => 'required|string|max:16|unique:users',
            'password' => 'required|string|min:6',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Exemplo de validação para imagem
        ]);

        $imageName = null;

        // Tratamento do arquivo de imagem
        if ($request->hasFile('profile_image')) {
            $imageName = time() . '.' . $request->profile_image->getClientOriginalExtension();
            $request->profile_image->move(public_path('profiles'), $imageName);
        }

        // Criar o hash da senha
        $hashedPassword = Hash::make($request->password);

        // Criar novo usuário
        $user = new User();
        $user->username = $request->username;
        $user->password = $hashedPassword;
        $user->profile_image = $imageName;

        // Salvar usuário no banco de dados
        if ($user->save()) {
            // Sucesso ao salvar
            return redirect()->route('login')->with('success', 'Usuário registrado com sucesso!');
        } else {
            // Tratamento de erro ao salvar
            return back()->withInput()->withErrors('Erro ao salvar usuário.');
        }
    }
    public function autenticar(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'username' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redireciona para a página de login após o logout
    }

    public function showEditForm()
    {
        // Obtém o usuário autenticado
        $user = Auth::user();

        // Retorna a visão com o usuário atual
        return view('layouts.edit_user', compact('user'));
    }

    public function update(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'username' => 'required|string|max:16|unique:users,username,' . Auth::id(),
            'password' => 'nullable|string|min:6',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtém o usuário autenticado
        $user = Auth::user();

        // Atualiza o username
        $user->username = $request->username;

        // Se uma nova senha foi fornecida, atualiza a senha
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Tratamento do arquivo de imagem
        if ($request->hasFile('profile_image')) {
            // Remove a imagem antiga, se existir
            if ($user->profile_image) {
                $oldImagePath = public_path('profiles/' . $user->profile_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->profile_image->getClientOriginalExtension();
            $request->profile_image->move(public_path('profiles'), $imageName);
            $user->profile_image = $imageName;
        }

        // Salva as alterações no usuário
        $user->save(); // Certifique-se de que o método `save` está disponível

        // Redireciona com uma mensagem de sucesso
        return redirect()->route('home')->with('success', 'Informações do usuário atualizadas com sucesso!');
    }

}