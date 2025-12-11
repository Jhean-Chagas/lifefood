@extends('layouts.app')

@section('content')

<section class="sobre">
    <div class="container p-5">

        <!-- Título -->
        <div class="row py-5">
            <div class="col-12">
                <h1 class="fw-bold mt-5 text-center">Sobre</h1>
            </div>
        </div>

        <!-- Primeira linha -->
        <div class="row align-items-center py-5">

            <div class="col-md-3">
                <img src="{{ asset('sobre.png') }}" class="img-fluid" alt="Sobre imagem">
            </div>

            <div class="col-md-9">
                <h3 class="fw-bolder p-3">LIFEFOOD</h3>
                <p class="ms-3">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...
                </p>
            </div>

            <!-- Segunda linha -->
            <div class="col-md-9 py-5 mt-5">
                <h3 class="fw-bolder p-3">HISTÓRIA</h3>
                <p class="ms-3">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...
                </p>
            </div>

            <div class="col-md-3">
                <img src="{{ asset('sobre.png') }}" class="img-fluid" alt="Sobre imagem">
            </div>

        </div>

    </div>
</section>

@endsection
