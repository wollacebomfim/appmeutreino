<?php
    include_once '../conexao/conexao.php';
    echo "<table>";
    echo "<thead>";






    $_SESSION['id'];
    $aluno = $_SESSION['id'];

    $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

    $data = date('Y-m-d');
 

    $querySelect = $conexao->query("SELECT treinos.id_atleta, treinos.nome, treinos.graduacao, treinos.ultimo_treino, usuarios.foto_usuario FROM treinos, usuarios WHERE treinos.id_atleta = usuarios.id ORDER BY treinos.id DESC;");
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id_atleta'];
        $nome = $registros['nome'];
        $graduacao = $registros['graduacao'];
        $treino = $registros['ultimo_treino'];
        $data = date("d-m-Y", strtotime($treino));
        $foto = $registros['foto_usuario'];
        $hora = date("H:i", strtotime($treino)); 
        $diasemana_numero = date('w', strtotime($data));
     
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
          echo " - Graduação <img src='../img/".$graduacao.".png' alt='' class='square responsive-img' width='30' height='30'>";
          echo" <span class='black-text'>";
          echo"<br>Fez check-in na data de ".$diasemana[$diasemana_numero]." </br> ".$data."  as  ".$hora."";
          echo" </span>";
          echo"     </div>";
  echo"</div>";
  echo"</div>";
  echo"</div>";


  
endwhile;
?>