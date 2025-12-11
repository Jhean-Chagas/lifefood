<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable {
    use Queueable, SerializesModels;

    public array $dados;

    public function __construct(array $dados){
        $this->dados = $dados;
    }

public function build(){
    return $this->subject('Nova mensagem do site LIFEFOOD')
                ->view('emails.mensagem')
                ->with(['dados' => $this->dados]);
    }
}    
