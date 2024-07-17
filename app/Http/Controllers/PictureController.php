<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{
    public function index()
    {
        // Recupera o usuário autenticado
        $user = Auth::user();

        // Verifica se o usuário está autenticado e se possui uma imagem de perfil definida
        if ($user && $user->profile_image) {
            // Caminho completo para a imagem de perfil do usuário
            $profileImagePath = asset('profiles/' . $user->profile_image); // Altere conforme o seu caminho real

            // Passa o caminho da imagem para a view
            return view('home', [
                'profileImagePath' => $profileImagePath
            ]);
        }

        // Se o usuário não tiver imagem de perfil, pode definir um caminho padrão ou lidar com isso na view
        return view('home'); // Se não precisar passar a imagem, apenas renderize a view
    }
}