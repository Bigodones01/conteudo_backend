<?php

if(!empty($_FILES['foto']['name'])) {
    //local temporário
    $origem = $_FILES['foto']['tmp_name'];

    //cria um novo nome único para a foto
    $nome_foto = time().$_FILES['foto']['name'];

    //local para onde o arquivo de upload vai ser movido
    $destino = "../uploads/$nome_foto";

    //move o arquivo de uploiad para a pasta destino
    move_uploaded_file($origem, $destino);
} else {
    $nome_foto = "sem_foto.png";
}