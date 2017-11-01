<?php

include "conexao_banco.php";

$user = (isset($_POST['user'])) ? true : false;
$pass = (isset($_POST['pass'])) ? true : false;

if(isset($_POST['user']) && isset($_POST['pass'])){
  echo $_POST['user'];
  echo $_POST['pass'];

  $query = "SELECT * FROM cliente";

  $link = conectaBanco();
  $result = mysqli_query($link, $query);

}else{
  die("Parametro codigo não enviado!");
}

?>

<table border=1 width="800" align='center'>
  <tr>
    <td colspan="6" align="center"><font size=5>Clientes</font></td>
  </tr>
  <tr>
     <th>Codigo</th>
     <th>Nome</th>
     <th>E-mail</th>
     <th>CPF</th>
     <th>Sexo</th>
     <th>Estado</th>
  </tr>

  <?php

  $find = false;

  while ($row = mysqli_fetch_row($result)) {

    $find = true;

    echo "<tr><td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>";
    if($row[4]){
      echo "Masculino";
    }else {
      echo "Feminino";
    }
    echo "</td>";
    echo "<td>".$row[5]."</td></tr>";
  }

  if(!$find){
    echo "<tr><td colspan='6' align='center'><i>Nenhum registro cadastrado.</i></td></tr>";
  }

  ?>

</table>
