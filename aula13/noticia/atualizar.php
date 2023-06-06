<?php
   require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idnoticia'];
   $titulo = $_POST['titulo'];
   $materia = $_POST['materia'];
   $categoria = $_POST['categoria'];

   require_once "faz_upload.php";
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `noticia` SET `titulo`= ?, `materia`= ?, `categoria`= ?, foto=? WHERE  `idnoticia`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?, ?
   $comando->bind_param("ssssi", $titulo, $materia, $categoria, $foto, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







