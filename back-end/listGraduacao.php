<?php
    include_once '../conexao/conexao.php';
    $sql = $conexao->query("SELECT * FROM graduacao WHERE id ORDER BY id ASC");
    while($dados = mysqli_fetch_array($sql)):
    echo   "<option value=\"".$dados["cor"]."\">".$dados["cor"]."</option>";
    endwhile;
    $conexao->close();
    ?>