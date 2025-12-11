<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Mail\ContatoMail;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Validação
        $dados = $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'assunto' => 'required|min:3',
            'mensagem' => 'required|min:5',
        ]);

        // 2. Salvar no banco (opcional)
        // Só funciona se você rodou a migration
        Contato::create($dados);

        // 3. Enviar email
        Mail::to('chagasjhean@gmail.com')->send(new ContatoMail($dados));

        // 4. Voltar com mensagem de sucesso
        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
