<!-- FOOTER GLOBAL -->
<!-- Este footer será incluído em todas as páginas via @include('components.footer') -->

<footer class="rodape mt-5">
    <div class="container">

        <div class="row p-5">

            <!-- LOGO E DESCRIÇÃO -->
            <div class="col-md-3 mt-3">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('logo1.png') }}" alt="Logo LIFEFOOD" width="100" height="44">
                </a>
                <p>Comida deliciosa para todos os gostos!</p>
            </div>

            <!-- MENU -->
            <div class="col-md-3 mt-3">
                <h3 class="fs-6 ms-3 text-black">MENU</h3>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link fw-lighter text-black" href="{{ route('home') }}">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-lighter text-black" href="{{ route('sobre') }}">Sobre</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-lighter text-black" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>

            <!-- REDES SOCIAIS -->
            <div class="col-md-3 mt-3">
                <h3 class="fs-6 text-center">REDES SOCIAIS</h3>

                <div class="mt-3 d-flex justify-content-center gap-3">
                    <a class="text-white fs-3" href="https://wa.me/5521987758393" target="_blank">
                        <i class="bi bi-whatsapp"></i>
                    </a>

                    <a class="text-white fs-3" href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a class="text-white fs-3" href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- COLUNA VAZIA (MANTIDA POR DESIGN) -->
            <div class="col-md-3 mt-3"></div>

        </div>

        <hr>

        <p class="text-center"> © 2025 LIFEFOOD – Todos os direitos reservados.</p>
    </div>
</footer>
