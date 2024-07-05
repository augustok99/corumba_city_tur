<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('config')
</head>

<body class="bg-blue_light">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

    <header class="flex justify-center">
        @include('layouts.cabecalho')
    </header>

    <main>
        <section>
            @include('layouts.home')
        </section>

        <section>
            @include('layouts.historias')
        </section>

        <section>
            @include('layouts.sobre')
        </section>
    </main>


</body>


</html>