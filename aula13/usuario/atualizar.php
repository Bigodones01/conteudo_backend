<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idusuario'];
   $nome = $_POST['nome'];
   $login = $_POST['login'];
   $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
   
   require_once "faz_upload.php";
   //cria uma variável com um comando SQL
   $SQL = "UPDATE `usuario` SET `nome`= ?, `login`= ?, `senha`= ?, foto=? WHERE  `idusuario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $nome, $login, $senha, $foto, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







