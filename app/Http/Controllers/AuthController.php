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
            'username' => 'required|string|max:255|unique:users',
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
            return redirect()->route('home')->with('success', 'Usuário registrado com sucesso!');
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
}