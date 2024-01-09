<?php

namespace Models;

use Email;

class ContatoModel {
    public static function enviarFormulario()
    {
        
        $body = "
        <h1>Email TEST</h1>
        ";
        $mail = new Email('host','email','senha','name');
        $personemail = ['assunto'=>'Aula com php','corpo'=> $body];
        $mail->addAdress("email","name");
        $mail->enviarEmail();


    }
}