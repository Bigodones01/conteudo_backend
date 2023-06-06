<?php 

require_once "../template/cabecalho.php"; 
require_once "../template/menu_restrito.php";?>

<div class="container">
    <h1>Área Restrita</h1>
    <hr>

    <form action="validar.php" method="post" enctype="multipart/form-data">
        

        <label class="form_label">Login</label><br>
        <input class="form_control" type="text" name="login"><br>

        <label class="form_label">Senha</label><br>
        <input class="form_control" type="password" name="senha"><br>

        <button type="submit"  class="btn btn-warning">Entrar</button>    
    </form>
    
</div>

<?php require_once "../template/rodape.php"; ?>