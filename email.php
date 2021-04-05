<?php

if(isset($_POST['email'] && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);


$to = "juliocesra38@gmail.com";
$subjet = "Contato - Julio Silva";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:teste@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion(); 

if(mail($to,$subjet,$body,$header)){

    echo("Email enviado com sucesso");

}else{
    echo("Email não pode ser enviado");
}

}

?>