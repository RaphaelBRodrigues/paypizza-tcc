<!DOCTYPE html>
<html>
<head>
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
                    <<?php  
                     $username = $_POST['username'];
                     $password = $_POST['password'];
                    //Consulta
                      
                        $dados = mysqli_query($mysqli,'SELECT * FROM cliente');
                        while ($row = $dados->fetch_assoc()) {
                        echo $row['Usuario'];
                        echo "|";
                        echo $row['Senha'];
                        echo "<br>";
                        if($username == $row['Usuario']){
                          if ($password == $row['Senha']) {
                           echo "usuario autenticado";
                          }else
                          echo "senha errada";
                        }
                        } 
                        ?>
</body>
</html>
