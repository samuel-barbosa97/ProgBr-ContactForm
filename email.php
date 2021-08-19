<?php


if(isset($_POST(['email']) && !empty($_POST(['email']))

$nome = addcslashes($_POST(['name']))
$email = addcslashes($_POST(['email']))
$mensagem = addcslashes($_POST(['message']))

$to = "samuel.barbosa1997@hotmail.com";
$subject = "Contato - Programador Samuel";
$body = "Nome:  ".$nome. "\n"
        "Email: ".$email."\n"
        "Mensagem: ".$mensagem;

$header = "From: samuel.alan1997@gmail.com"."\r\n"
        ."Reply-To:".$email".\r\n"
        ."XnMailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!")

}else{
    echo("Email não pode ser enviado!")";"

}

}

?>