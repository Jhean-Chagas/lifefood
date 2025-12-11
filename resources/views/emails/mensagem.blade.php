<!-- resources/views/emails/mensagem.blade.php -->

<h2>Nova mensagem enviada pelo site LIFEFOOD</h2>

<p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
<p><strong>Email:</strong> {{ $dados['email'] }}</p>
<p><strong>Assunto:</strong> {{ $dados['assunto'] }}</p>

<hr>

<p><strong>Mensagem:</strong></p>
<p>{{ $dados['mensagem'] }}</p>

<hr>

<p>Enviado em {{ now()->format('d/m/Y H:i') }}</p>
