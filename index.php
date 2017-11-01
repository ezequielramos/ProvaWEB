<?php

/*Sempre que for para tela de login apaga a sessão*/
session_start();
unset($_SESSION['user']);
unset($_SESSION['pass']);

?>

<html>
<form action="busca_clientes.php" method="post">
  <table border='1' align='center'>
    <tr>
      <td colspan='2'>&nbsp;</td>
    </tr>
    <tr>
      <td>Usuario: </td>
      <td><input name='user'></td>
    </tr>
    <tr>
      <td>Senha: </td>
      <td><input name='pass'></td>
    </tr>
    <tr>
      <td colspan='2' align='center'><input type='submit' value='Entrar'></td>
    </tr>
    <tr>
      <td colspan='2' align='center'><font size='2'><a href='cadastro_usuario.html'>Clique aqui para se cadastrar</a></font></td>
    </tr>
  </table>
</form>
</html>
