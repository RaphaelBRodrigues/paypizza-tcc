<!DOCTYPE html>
<html>
<head>
  <?php
$databaseHost = 'localhost';
$databaseName = 'tcc';
$databaseUsername = 'PayPizza';
$databasePassword = 'paypizza';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);




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
                    <<?php
                     $username = $_POST['username'];
                     $password = $_POST['password'];
                     if(isset($password) || isset($username) ){
                       $password = "";
                       $username = "";
                       echo "Campo em branco";


                     }
                    //Consulta

                        $dados = mysqli_query($mysqli,'SELECT * FROM cliente');

                        while ($row = $dados->fetch_assoc()) {

                       echo "<br>";

                          if($username == $row['Usuario']){
                          if ($password == $row['Senha']) {
                           echo "Login Efetuado";
                         }
                       }

                         if(($username != $row['Usuario']) || ($username != $row['Senha'])){
                           echo "Credenciais Inválidas";
                         }
                        }



                        ?>
</body>
</html>

<style>
#o{
  opacity: 0;
}
</style>
