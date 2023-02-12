<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addcslashes($_POST['name'])
    $email = addcslashes($POST['email'])
    $mensagem = addcslashes($_POST['message'])

    $t0 = "joao_dacosta@live.com";
    $subject = "Contato meu Site";
    $body = "Nome :".$nome. "\r\n"
            "Email: ".$email. "\r\n"
            "Mensagem: ".$mensagem;

    }


    ?>