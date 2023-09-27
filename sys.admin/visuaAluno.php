<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";





$_GET['id'];
$aluno = $_GET['id'];


    $querySelect = $conexao->query("SELECT * FROM treinos WHERE id_atleta = '$aluno' ORDER BY ultimo_treino DESC");
 

    echo "<td><b>Status</b><td><b>Ultima Aula</b></td>";
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $status = $registros['status'];
        $treino = $registros['ultimo_treino'];
        $newDate = date("d-m-Y H:i", strtotime($treino)); 
        $newDate = $newDate . ":00";
    echo "<tr>";
    echo "<td><b><font color='green'>$status&nbsp;</td></font></b><td>$newDate</td>";
    endwhile;
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
    echo "</br></br>";
    
    ?>