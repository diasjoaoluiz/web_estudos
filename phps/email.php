<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['message']);

    $to = "joao_dacosta@live.com";
    $subject = "Contato meu Site";
    $body = "Nome: ".$nome. "\r\n"."Email: ".$email."\r\n"."Mensagem: ".$mensagem;
    $header = "From:joao_dacosta@live.com"."\r\r"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    
    if(mail($to,$subject,$body,$header)){
        echo "<meta http-equiv='refresh' content='1;URL=../tabs/about.html'>";
        echo "<script>alert('E-mail enviado!')</script>";
    }else{
        echo "<meta http-equiv='refresh' content='1;URL=../tabs/about.html'>";
        echo "<script>alert('E-mail não enviado!')</script>";
    }
    }

    ?>