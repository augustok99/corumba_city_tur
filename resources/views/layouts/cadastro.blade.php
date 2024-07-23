<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('config')
</head>

<body class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%">
    <div class="min-h-screen flex items-center justify-center w-full">
        <div class="bg-white w-[24rem] shadow-xl rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4">Faça o seu Cadastro!</h1>
            <form action="{{ route("register") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="username_register" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                    <input type="text" name="username" id="username_register"
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                        placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <label for="password_register" class="block text-sm font-medium text-gray-700 mb-2">Sua
                        senha</label>
                    <input type="password" name="password" id="password_register"
                        class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                        placeholder="Entre com sua senha" required>
                </div>
                <div class="mb-12 flex justify-center items-start flex-col">
                    <label for="profile_image" class="block text-sm font-medium text-gray-700 mb-2">Imagem
                        Perfil</label>
                    <input name="profile_image" id="imageInput" class="custom-file-input ml-20" type="file"
                        accept="image/*">

                    <ul id="taskList" class="hidden mt-28 absolute">
                        <li class="flex items-center font-poppins text-sm mt-1">
                            <svg class="w-4 h-4 me-2 text-green-700 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            Imagem carregada com sucesso!
                        </li>
                    </ul>
                </div>
                <div class="flex items-center justify-between mb-4 mt-6">
                    <a href="{{ route('home') }}"
                        class="text-xs mb-2 text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Entrar
                        sem fazer login</a>
                    <a href="{{ route('login') }}"
                        class="text-xs mb-2 text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Já
                        possuo um login</a>
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose_strong hover:bg-[#d19090] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Registrar</button>
            </form>

            @if ($errors->any())
                <div class="bg-red-100 mt-2 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
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