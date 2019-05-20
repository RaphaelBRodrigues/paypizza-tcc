<!DOCTYPE html>
<html>
<head>
 <?php
 session_start();
if($_SESSION['logado'] == true){
  echo "LOGADO";
}
                    include_once('config.php');

                    ?>

	<title></title>
	 <?php

                    include_once('config.php');
                    ?>
</head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<body>
  <form method="post" action="Login.php">
                    <h2>Login</h2>

                       <i class="material-icons">person</i>
                          <input type="text" name="username" id="i1" class="input" placeholder="Nome de usuário"/><br><br>

                           <i class="material-icons">vpn_key</i>
                    <input type="password" name="password" id="i2" class="input" placeholder="Senha"/><Br><br>
                                        <input type="submit" id="i3" placeholder="Enviar"/>


                    </form>
                    <br>
                  <?php
include_once('LoginPHP.php');
                   ?>
</body>
</html>

<style>
#o{
  opacity: 0;
}
</style>
