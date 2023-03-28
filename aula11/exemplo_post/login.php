<?php

    if(isset($_POST['user']))
    {
        //verifica se o usuário é igual a admin e a senha é igual a 123
        if($_POST['user'] == "admin" && $_POST['password'] == "123")
        {
            echo("Logado.");
        } else {
            echo("Usuário ou senha inválidos.");
        }
    } else {
        //manda abrir outro arquivo, o formulário de login
        //caso o usuário tente abrir esse arquivo pela URL
        //sem acessar o formulário de login de "redirecionamento"
        header("Location: form_login.html");
    }
?>