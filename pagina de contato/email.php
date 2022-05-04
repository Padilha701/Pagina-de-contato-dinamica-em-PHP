<?php

    if(isset($_POST['email']) && !empty($_POST['email']));{

        $nome = addslashes(utf8_decode($_POST['name']));
        $email = addslashes($_POST['email']);
        $mensagem = addslashes(utf8_decode($_POST['mesage']));

        $to = 'padokazzz@gmail.com';
        $subject = 'Formulario de contato';
        $body = "Nome: $nome \r\n Email: $email \r\n Mensagem: $mensagem";

        $header = "From: padokaverso@gmail.com \r\n Reply-To: $email \r\n  X=Mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)){

            echo 'email enviado com sucesso!';
        }
        else{
            'Erro: E-mail não pôde ser enviado';
        }

    }
    

?>