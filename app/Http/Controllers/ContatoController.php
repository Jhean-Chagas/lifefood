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
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'assunto' => 'required|min:3',
            'mensagem' => 'required|min:5'
        ]);

        // Salva no banco de dados
        Contato::create($validated);

        // Envia email (para você, dono do site)
        Mail::to('seuemail@dominio.com')->send(new ContatoMail($validated));

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
