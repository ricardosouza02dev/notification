<?php

    require __DIR__ . '/../lib_ext/autoload.php';

    use Notification\Email;

    $novoEmail = new Email(
        2,
        "smtp-relay.sendinblue.com",
        "ricardosouza020387@gmail.com",
        "zWYnas3H0VxSM29f",
        "tls",
        "587",
        "ricardosouza020387@gmail.com",
        "Ricardo Souza"
    );

    $novoEmail->sendMail(
        "Assunto de Teste",
        "<p>Esse é um email de <b>Teste</b></p>",
        "ricardosouza020387@gmail.com",
        "Ricardo Souza",
        "souzanunez@hotmail.com",
        "Ricardo Souza"
    );

    var_dump($novoEmail);
