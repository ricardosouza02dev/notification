<?php

    require __DIR__ . '/lib_ext/autoload.php';

    use Notification\Email;

    $novoEmail = new Email;
    $novoEmail->sendMail(
        "Assunto de Teste",
        "<p>Esse é um email de <b>Teste</b></p>",
        "ricardosouza020387@gmail.com",
        "Ricardo Souza",
        "souzanunez@hotmail.com",
        "Ricardo Souza"
    );

    var_dump($novoEmail);
