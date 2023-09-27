<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";






    $_SESSION['id'];
    $aluno = $_SESSION['id'];

    $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

    $data = date('Y-m-d');
    $querySelect = $conexao->query("SELECT * FROM treinos WHERE ultimo_treino BETWEEN '2023-08-01' AND '2023-08-31' AND id_atleta = '$aluno' ORDER BY ultimo_treino DESC");
 

    echo "<td><b>Status</b><td><b>Dia</b></td><td><b>Data / Hora</b></td>";
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $status = $registros['status'];
        $treino = $registros['ultimo_treino'];
        $newDate = date("d-m-Y", strtotime($treino)); 
        //$newDate = $newDate . ":00";
        $foto = $registros['foto'];
        $diasemana_numero = date('w', strtotime($newDate));
        $dia = date("H:i", strtotime($treino)); 
    echo "<tr>";
    echo "<td><b><font color='green'>$status&nbsp;</td></font></b><td>$diasemana[$diasemana_numero]</td><td>$newDate as $dia</td>";
    endwhile;
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
    echo "</br></br>";
    
    ?>