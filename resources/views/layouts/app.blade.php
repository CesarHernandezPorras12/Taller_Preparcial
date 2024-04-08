<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu aplicación</title>
    <!-- CSS de Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- CSS de tu aplicación -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Aquí puedes incluir la barra de navegación -->
        <nav>
            <!-- Contenido de la barra de navegación -->
        </nav>
    </header>

    <main>
        <!-- Aquí se incluirá el contenido específico de cada página -->
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>

    <!-- JavaScript de tu aplicación -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JavaScript de Bootstrap (requiere jQuery) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
