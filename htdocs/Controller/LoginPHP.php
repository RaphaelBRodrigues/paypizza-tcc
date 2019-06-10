 <?php
 session_start();

 include_once('config.php');

   $username = $_POST['username'];
   $password = $_POST['password'];
if(empty($username) || empty($password) ){
echo "Preencha os campos <br><br>";
}

  //Consulta

      $dados = mysqli_query($con,'SELECT * FROM `Cliente`');
if($_SESSION['logado'] == false){
             echo "Lista de usuarios";
           }
        echo "<br>";

      while ($row = $dados->fetch_assoc()) {

     echo "<br>";


        if($username == $row['Usuario']){
        if ($password == $row['Senha']) {

         $_SESSION['logado'] = true;
         $_SESSION['nome'] = $username;

       }
     }else if((isset($username) || isset($password)) && ($_SESSION['logado'] == false)){
       echo "Credenciais inválidas</br>";

     }
    /* if($username != $row['Usuario']){
     if ($password != $row['Senha']) {
       echo "Credenciais Inválidas";
    }
  }*/
  if($_SESSION['logado'] == false){

       echo $row['ClienteID'];
echo "-";
       echo $row['Usuario'];
       echo "<br>";
     }

      }
      ECHO "<br>";ECHO "<br>";

if( $_SESSION['logado'] == true){
    echo "LOGIN EFETUADO COM SUCESSO,BEM VINDO ".$_SESSION['nome'];
}

mysqli_query($mysqli,"DELETE from Cliente where Senha = '';");


      ?>
