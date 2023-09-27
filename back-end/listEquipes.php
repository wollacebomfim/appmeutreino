<?php
    include_once '../conexao/conexao.php';
    $sql = "SELECT * FROM academias WHERE id ORDER BY nome ASC";
    $resultado = mysqli_query($conexao, $sql);
    while($dados = mysqli_fetch_array($resultado)):
    echo   "<option value=\"".$dados["id"]."\">".$dados["nome"]."</option>";
    endwhile;

    ?>