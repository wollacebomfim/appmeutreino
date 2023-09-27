<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";




    $id_academia = $_SESSION['id'];

    $querySelect = $conexao->query("SELECT * FROM usuarios WHERE id_academia = '$id_academia' ORDER BY nome ASC");
 

    echo "<td><b>Aluno</b><td><b>Graduação</b></td><td><b>Pagar</b></td>";
    while($registros = $querySelect->fetch_assoc()):
        $id_academia = $registros['id_academia'];
        $nome = $registros['nome'];
        $graduacao = $registros['graduacao'];
    echo "<tr>";
    echo "<td>$nome&nbsp;</td><td>$graduacao</td><td><a href='pgtAluno.php?id=$id_academia'><i class='material-icons'>attach_money</td>";
    endwhile;
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
    echo "</br></br>";
    
    ?>