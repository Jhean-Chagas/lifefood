<!-- NAVBAR GLOBAL -->
<!-- Esta navbar será incluída em todas as páginas via @include('components.navbar') -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="font-family: 'Poppins', sans-serif;">
    <div class="container">

        <!-- Logo com link para a rota 'home' -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('logo1.png') }}" alt="Logo LIFEFOOD" width="100" height="44">
        </a>

        <!-- Botão para abrir/fechar no mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Itens do menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- Link para HOME -->
                <li class="nav-item px-2">
                    <a class="nav-link text-danger fw-bold" href="{{ route('home') }}">Início</a>
                </li>

                <!-- Link para SOBRE -->
                <li class="nav-item px-2">
                    <a class="nav-link text-dark fw-bold" href="{{ route('sobre') }}">Sobre</a>
                </li>

                <!-- Link para CONTATO -->
                <li class="nav-item px-2">
                    <a class="nav-link text-dark fw-bold" href="{{ route('contato') }}">Contato</a>
                </li>

            </ul>
        </div>

    </div>
</nav>
