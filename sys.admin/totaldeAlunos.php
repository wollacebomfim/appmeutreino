<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";




    $id_academia = '1';

    $querySelect = $conexao->query("SELECT * FROM usuarios WHERE id_academia = '$id_academia' ORDER BY nome ASC");
 

    echo "<td><b>Aluno</b><td><b>Graduação</b></td><td><b>Ver Aulas</b></td><td><b>WhatsApp</b></td>";
    while($registros = $querySelect->fetch_assoc()):
        $id_academia = $registros['id_academia'];
        $nome = $registros['nome'];
        $graduacao = $registros['graduacao'];
        $whatsapp = $registros['whatsapp'];
    echo "<tr>";
    echo "<td>$nome&nbsp;</td><td>$graduacao</td><td><a href='dashboard.php?id=$id_academia'><i class='material-icons'>search</td><td><a href='https://api.whatsapp.com/send?1=pt_BR&phone=55$whatsapp'><i class='material-icons'>smartphone</td>";
    endwhile;
    echo "</tr>";
    echo "</thead>";
    echo "</table>";
    echo "</br></br>";
    
    ?>