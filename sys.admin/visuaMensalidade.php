<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";



    
    $id_academia = $_SESSION['id'];

    $querySelect = $conexao->query("SELECT * FROM mensalidades WHERE id_academia = '$id_academia'");
 

    echo "<td><b>Aluno</b><td><b>Status</b></td><td><b>Graduação</b></td><td><b>Data PGT</b></td>";
    while($registros = $querySelect->fetch_assoc()):
        $nome = $registros['nome'];
        $status = $registros['status'];
        $graduacao = $registros['graduacao'];
        $data = $registros['data_pgt'];
        $newDate = date("m-Y ", strtotime($data)); 
        
    echo "<tr>";
    echo "<td>$nome&nbsp;</td><td>$status</td><td>$graduacao</td><td>$newDate</td>";
    endwhile;
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
    echo "</br></br>";
    
    ?>