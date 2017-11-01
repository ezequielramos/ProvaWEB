<?php

include "conexao_banco.php";

session_start();

/*Verifica se foi enviado usuario e senha por POST, se não, verifica na sessão.*/
if(isset($_POST['user']) && isset($_POST['pass'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];
}else{

  if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
    $user=$_SESSION['user'];
    $pass=$_SESSION['pass'];
  }else{
    die("Usuario não autenticado!");
  }
}

$link = conectaBanco();

$query = "SELECT * FROM usuario WHERE usuario = '$user' AND senha = '$pass'";
$result = mysqli_query($link, $query);

if(!mysqli_fetch_row($result)){
  die("Usuario não autenticado!");
}

$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;

$query = "SELECT * FROM cliente";
$result = mysqli_query($link, $query);

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

  echo "<tr><td colspan='6' align='center'><input type='button' value='Sair' onclick=\"window.location.href='index.php'\"></td></tr>";

  ?>

</table>
