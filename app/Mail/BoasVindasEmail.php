<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BoasVindasEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $senha;
    public $nome;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usuario, $senha, $nome)
    {
        $this->usuario=$usuario;
        $this->senha=$senha;
        $this->nome=$nome;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.emailPadrao')->from('rmosca2001@hotmail.com');
    }
}
