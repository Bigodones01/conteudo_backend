<?php
    require "consultar_todos.php"; 
    require_once "../template/cabecalho.php";
?>

<div class="container">
<h1>Notícias</h1>
<hr>
<div class="text-end">
    <a href="formulario.php" class="btn btn-success">Inserir Novo</a>
</div>
<table class="table" id="tabela_dados">
    <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Categoria</th>
            <th scope="col">Foto</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($categorias as $categoria): ?>
        <tr>
            <td><b><?= $categoria->titulo ?></b></td>
            <td><?= $categoria->categoria ?></td>
            <td><img src="../uploads/<?= $categoria->foto ?>" height="75px" width="75px"></td>
            <td class="text-end" width="25%">
                <a href="excluir.php?id=<?= $categoria->idnoticia ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
                <a href="formulario.php?id=<?= $categoria->idnoticia ?>" class="btn btn-primary"><i class="fa-solid fa-file-pen"></i> Atualizar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<?php require_once "../template/rodape.php" ?>