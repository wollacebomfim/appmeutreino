<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";






    $_SESSION['id'];
    $aluno = $_SESSION['id'];

    $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

    $data = date('Y-m-d');
    $querySelect = $conexao->query("SELECT * FROM treinos ");
 

 
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $nome = $registros['nome'];
        $foto = $registros['foto'];
        $graduacao = $registros['graduacao'];
        $treino = $registros['ultimo_treino'];
        $newDate = date("d-m-Y H:i", strtotime($treino)); 
        $newDate = $newDate . ":00";
        $diasemana_numero = date('w', strtotime($newDate));
    echo "<tr>";

    echo" <div class='col s12 m8 offset-m2 l6 offset-l3'>";
    echo" <div class='card-panel grey lighten-5 z-depth-1'>";
    echo"  <div class='row valign-wrapper'>";
    echo"   <div class='col s2'>";
    echo"    <img src='../uploads/".$foto."' alt='' class='circle responsive-img' width='100' height='100'> ";
    echo"    </div>";
    echo"    <div class='col s10'>";
        echo" <span class='black-text'>";
        echo "<br>";
          echo" <b>".$nome."</b>";
          echo"   </span>";
          echo " - Faixa ".$graduacao." - <img src='../img/".$graduacao.".png' alt='' class='square responsive-img' width='30' height='30'>";
          echo" <span class='black-text'>";
          echo"<br>Fez check-in na data de ".$diasemana[$diasemana_numero]." ".$newDate." ";
          echo" </span>";
          echo"     </div>";
  echo"</div>";
  echo"</div>";
  echo"</div>";


  
endwhile;
?>