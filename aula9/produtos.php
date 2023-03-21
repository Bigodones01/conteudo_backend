<?php
    $produto1 = [
        "nome" => "Camera",
        "marca" => "LGs",
        "preco" => 2500
    ];
    
    $produto2 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 5000
    ];
    
    $produto3 = [
        "nome" => "Celular",
        "marca" => "samsung",
        "preco" => 7500
    ];
    
    $armazem = [
        $produto1,
        $produto2,
        $produto3
        ];
    echo json_encode ($armazem);
?>