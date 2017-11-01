<?php

include "conexao_banco.php";

if(isset($_POST['user']) && isset($_POST['pass'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];
}else{
  die("Usuário e Senha não enviados.");
}

$query = "INSERT INTO usuario (usuario, senha) VALUES ('$user','$pass')";

$link = conectaBanco();
mysqli_query($link,$query);

?>
<table border='1' align='center'>
  <tr>
    <td align='center'><font size=5>Usuário criado com sucesso.</font></td>
  </tr>
  <tr>
    <td align='center'><input type='button' value='Voltar' onclick="window.location.href='index.php'"></td>
  </tr>
</table>
