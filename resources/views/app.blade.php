<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('config')
</head>

<body class="bg-gradient-to-r from-gray-200 via-rose_light to-gray-50 from-10% via-10% to-80%%">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

    <header class="flex justify-center">
        @include('layouts.cabecalho')
    </header>

    <main>
        <section id="home">
            @include('layouts.home')
        </section>

        <section id="historias">
            @include('layouts.historias')
        </section>

        <section id="sobre">
            @include('layouts.sobre')
        </section>
    </main>

</body>


</html>