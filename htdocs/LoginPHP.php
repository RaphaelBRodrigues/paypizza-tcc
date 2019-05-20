 <?php
 session_start();

   $username = $_POST['username'];
   $password = $_POST['password'];

  //Consulta

      $dados = mysqli_query($con,'SELECT * FROM `Cliente`');

      while ($row = $dados->fetch_assoc()) {

     echo "<br>";

        if($username == $row['Usuario']){
        if ($password == $row['Senha']) {
         echo "Login Efetuado";
         echo "SESSION";
         $_SESSION['logado'] = true;
         $_SESSION['nome'] = $username;

       }
     }else{
       echo "Credenciais inválidas";
       $_SESSION['logado'] = false;
       $_SESSION['nome'] = "Faça o login";
     }

    /* if($username != $row['Usuario']){
     if ($password != $row['Senha']) {
       echo "Credenciais Inválidas";
    }
  }*/

       echo "User: ";
       echo $row['Usuario'];
       echo "<br>";
       echo "Pass: ";
       echo $row['Senha'];
       ECHO "<br>";

      }



      ?>
