<?php
    include_once '../conexao/conexao.php';
   
    echo "<table>";
    echo "<thead>";

   

    $id_atleta = $_SESSION['id'];
    $querySelect = $conexao->query("SELECT * FROM treinos WHERE id_atleta = {$id_atleta} ORDER BY id_atleta DESC");

    
    echo "<td><b>Status</b><td><b>Ultima Aula </b></td>";
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $treino = $registros['ultimo_treino'];
        $status = $registros['status'];
        $newDate = date("d-m-Y H:i", strtotime($treino)); 
        $newDate = $newDate . ":00"; 
      

    
    echo "<tr>";
    echo "<td><b><font color='green'>$status&nbsp;</td></font></b><td>$newDate</td>";
    endwhile;
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
    echo "</br></br>";
$conexao->close();
    ?>