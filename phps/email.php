<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addcslashes($_POST['name']);
    $email = addcslashes($POST['email']);
    $mensagem = addcslashes($_POST['message']);

    
    $to = "joao_dacosta@live.com";
    $subject = "Contato meu Site";
    $body = "Nome :".$nome. "\r\n"
            "Email: ".$email. "\r\n"
            "Mensagem: ".$mensagem;
    $header = "From:"joao_dacosta@live.com"."\r\r"
                     ."Reply-To:".$email."\r\n"
                     ."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header(){
        echo("Deu certo");
    }
    

    }


    ?>