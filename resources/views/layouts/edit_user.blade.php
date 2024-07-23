<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include("config")
</head>

<header class="flex justify-center w-full">
    @include('layouts.cabecalho')
</header>

<body>
    <div class="min-h-screen flex items-center justify-center w-full">
        <div class="ring-2 ring-rose_strong bg-white w-[23rem] shadow-xl rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4">Editar Perfil</h1>
            <form action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                    <input type="text" name="username" id="username"
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:ring-1 focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                        placeholder="Username" value="{{ old('username', $user->username) }}" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Nova Senha
                        (opcional)</label>
                    <input type="password" name="password" id="password"
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:ring-1 focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                        placeholder="Digite uma nova senha (mínimo 6 caracteres)">
                </div>
                <div class="mb-12 flex justify-center items-start flex-col">
                    <label for="profile_image" class="block text-sm font-medium text-gray-700 mb-2">Imagem de
                        Perfil (opcional)</label>
                    <input name="profile_image" id="imageInput" class="custom-file-input ml-20" type="file"
                        accept="image/*">
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose_strong hover:bg-[#d19090] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Atualizar</button>
            </form>

            @if ($errors->any())
                <div class="bg-red-100 flex flex-col mt-2 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Erro!</strong>
                    <span class="block sm:inline">Por favor, corrija os seguintes erros:</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>


</body>

</html>