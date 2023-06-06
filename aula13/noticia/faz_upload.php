<?php

if (!empty($_FILES['foto']['name'])){
//local temporario onde foi realizado o upload da imagem
$origem = $_FILES['foto']["tmp_name"];

//cria um nome unico para a foto
$nome_foto = time().$_FILES['foto']['name'];

//local para onde a upload vai ser movida
$destino = "../uploads/$nome_foto";

move_uploaded_file($origem, $destino);
}else{
$nome_foto = "sem_foto.png";
}
