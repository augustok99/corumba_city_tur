<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('config')
</head>

<body class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%">
    <!-- component -->
    <div class="min-h-screen flex items-center justify-center w-full">
        <div class="bg-white ring-2 ring-rose_strong w-[24rem] shadow-xl rounded-lg px-8 py-6 max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4">Bem Vindo!</h1>
            <form action="{{ route('autenticar') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                    <input type="text" id="email" name="username"
                        class="shadow-sm rounded-md w-full px-3 py-2 border focus:ring-1 border-rose_strong focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                        placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Sua senha</label>
                    <input type="password" id="password" name="password"
                        class="shadow-sm rounded-md w-full px-3 py-2 border focus:ring-1 border-rose_strong focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                        placeholder="Entre com sua senha" required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <a href="{{route("home")}}"
                        class="text-xs mb-2 text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Entrar
                        sem fazer login</a>
                    <a href="{{route("cadastro")}}"
                        class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Criar
                        uma nova conta</a>
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose_strong hover:bg-[#d19090] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose_strong">Login</button>
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