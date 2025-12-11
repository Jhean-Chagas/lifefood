<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIFEFOOD</title>
    <!-- Carrega o favicon da pasta public -->
    <!-- asset() gera a URL correta do arquivo -->
    <link rel="icon" type="image/png" href="{{ asset('favIcon.png') }}">

    <!-- Bootstrap 5  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!--  CSS personalizado  -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-light">
    @include('components.navbar')

    <!-- Tudo dentro de @section('content') nas views será renderizado aqui -->
    <main class="pt-5">
        @yield('content')
    </main>

    <!-- Footer global -->
    <!-- O arquivo footer.blade.php deve estar em resources/views/components/footer.blade.php -->
    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
