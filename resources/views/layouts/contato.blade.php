@extends('layouts.app')

@section('content')

<section class="contato">
    <div class="container p-5">

        <!-- Título -->
        <div class="row py-5">
            <div class="col-12">
                <h1 class="fw-bold mt-5 text-center">Contato</h1>
            </div>
        </div>

<form class="row g-3" method="POST" action="{{ route('contato.enviar') }}">
    @csrf

    <!-- NOME -->
    <div class="col-md-6">
        <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
    </div>

    <!-- EMAIL -->
    <div class="col-md-6">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>

    <!-- ASSUNTO -->
    <div class="col-12">
        <input type="text" name="assunto" class="form-control" placeholder="Assunto" required>
    </div>

    <!-- MENSAGEM -->
    <div class="col-12">
        <textarea name="mensagem" rows="5" class="form-control" placeholder="Digite sua mensagem" required></textarea>
    </div>

    <div class="col-12 text-center">
        <button type="submit" class="btn btn-danger">Enviar Mensagem</button>
    </div>
</form>

<!-- EXIBE RETORNO -->
@if(session('success'))
    <div class="alert alert-success mt-4 text-center">
        {{ session('success') }}
    </div>
@endif
</section>

@endsection
