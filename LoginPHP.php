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
         echo "Login Efetuado</br>";
         echo "SESSION</br>";
         $_SESSION['logado'] = true;
         $_SESSION['nome'] = $username;

       }
     }else{
       echo "Credenciais inválidas</br>";

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
      ECHO "USUARIO CONECTADO:".$_SESSION['nome'] ;
      echo $_SESSION['logado'];
;



      ?>
