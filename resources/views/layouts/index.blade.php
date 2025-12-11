@extends('layouts.app')

@section('content')

<!-- SEÇÃO CAPA -->
<div class="capa mt-5">
    <div class="container py-5">
        <div class="row align-items-center">

            <!-- Texto da capa -->
            <div class="col-lg-6 text-white p-5 text-center text-lg-start">
                <h1 class="fw-bold display-4">Comida de Domingo</h1>
                <h3 class="fs-5">Comida deliciosa para todos os gostos!</h3>

                <!-- Botão WhatsApp -->
                <a class="btn btn-outline-light mt-3" 
                   href="https://wa.me/21987758393" target="_blank">
                    <i class="bi bi-whatsapp me-2"></i> PEÇA AGORA
                </a>
            </div>

            <!-- Imagem da capa -->
            <div class="col-lg-6 text-center mt-4">
                <img src="{{ asset('contato3.png') }}" class="img-fluid" alt="Imagem capa">
            </div>

        </div>
    </div>
</div>

<!-- Seção de Burgers -->
<section id="produtos-section" class="container py-5">

    <h2>Nossos Burgers</h2>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l1.png') }}" alt="burger 1">
                <h4>Burger Clássico</h4>
                <p>Pão brioche, carne artesanal e molho especial.</p>
                <p class="preco">R$ 22,90</p>
                <a href="https://wa.me/21987758393" target="_blank" class="btn btn-danger">Pedir</a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l1.png') }}" alt="burger 2">
                <h4>Cheddar Bacon</h4>
                <p>Carne 160g, cheddar cremoso e bacon crocante.</p>
                <p class="preco">R$ 27,90</p>
                <a href="https://wa.me/21987758393" target="_blank" class="btn btn-danger">Pedir</a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l1.png') }}" alt="burger 3">
                <h4>Burgão Duplo</h4>
                <p>Dois smashs 100g e queijo duplo.</p>
                <p class="preco">R$ 31,90</p>
                <a href="https://wa.me/21987758393" target="_blank" class="btn btn-danger">Pedir</a>
            </div>
        </div>

    </div>


    <!-- Seção bebidas -->
    <h2 class="mt-5">Nossas Bebidas</h2>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l2.png') }}" alt="bebida 1">
                <h4>Suco Natural</h4>
                <p>Refrescante e feito na hora.</p>
                <p class="preco">R$ 12,00</p>
                <a href="#" class="btn btn-danger">Pedir</a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l2.png') }}" alt="bebida 2">
                <h4>Refrigerante</h4>
                <p>Lata 350ml.</p>
                <p class="preco">R$ 6,00</p>
                <a href="#" class="btn btn-danger">Pedir</a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l2.png') }}" alt="bebida 3">
                <h4>Milkshake</h4>
                <p>Chocolate, morango ou baunilha.</p>
                <p class="preco">R$ 18,00</p>
                <a href="#" class="btn btn-danger">Pedir</a>
            </div>
        </div>

    </div>


    <!-- Seção sobremesas -->
    <h2 class="mt-5">Sobremesas</h2>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l3.png') }}" alt="sobremesa 1">
                <h4>Brownie</h4>
                <p>Com cobertura de chocolate.</p>
                <p class="preco">R$ 14,00</p>
                <a href="#" class="btn btn-danger">Pedir</a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l3.png') }}" alt="sobremesa 2">
                <h4>Mousse</h4>
                <p>Sabor chocolate, maracujá ou limão.</p>
                <p class="preco">R$ 10,00</p>
                <a href="#" class="btn btn-danger">Pedir</a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card produto-card p-3 text-center">
                <img src="{{ asset('l3.png') }}" alt="sobremesa 3">
                <h4>Açaí</h4>
                <p>250ml com granola e banana.</p>
                <p class="preco">R$ 16,00</p>
                <a href="#" class="btn btn-danger">Pedir</a>
            </div>
        </div>

    </div>

</section>

@endsection
