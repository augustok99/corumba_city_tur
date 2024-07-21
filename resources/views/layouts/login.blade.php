<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('config')
</head>

<!-- component -->
<div class="min-h-screen flex items-center justify-center w-full">
    <div class="bg-white shadow-xl rounded-lg px-8 py-6 max-w-md">
        <h1 class="text-2xl font-bold text-center mb-4">Bem Vindo!</h1>
        <form action="{{ route('autenticar') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input type="text" id="email" name="username"
                    class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                    placeholder="Username" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Sua senha</label>
                <input type="password" id="password" name="password"
                    class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-rose_strong focus:border-rose_strong"
                    placeholder="Entre com sua senha" required>
                <a href="#"
                    class="text-xs hover:text-indigo-700 focus:outline-none focus:ring-2 text-indigo-500 focus:ring-offset-2 focus:ring-indigo-500">Esqueceu
                    sua senha?</a>
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember"
                        class="h-4 w-4 rounded border-rose_medium text-rose_strong focus:ring-rose_medium focus:outline-none"
                        checked>
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Guardar login</label>
                </div>

                <div class="flex flex-col">
                    <a href="{{route("home")}}"
                        class="text-xs mb-2 text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Entrar
                        sem fazer login</a>
                    <a href="{{route("cadastro")}}"
                        class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Criar
                        uma nova conta</a>

                </div>

            </div>
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-rose_strong hover:bg-[#d19090] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose_strong">Login</button>
        </form>
    </div>
</div>