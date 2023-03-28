<?php

    $user = $_GET['user'];
    $password = $_GET['password'];
    if($user == "admin" && $password == "123")
    {
        echo("Logado.");
    } else {
        echo("Usuário ou senha inválidos.");
    }

?>