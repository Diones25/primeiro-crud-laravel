<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title') - Crud todo</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>

    <main>
        <section>
            @yield('content')
        </section>
    </main>

    <footer>
        Rodapé
    </footer>
</body>
</html>