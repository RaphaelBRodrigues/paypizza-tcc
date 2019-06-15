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
 $_SESSION['SessaoID'] = rand();
         $_SESSION['logado'] = true;
         $_SESSION['nome'] = $username;
         $_SESSION['Nivel'] = 1;

$_SESSION['ClienteID'] =  $row['ClienteID'];
       }
     }else if((isset($username) || isset($password)) && ($_SESSION['logado'] == false)){
       echo "Credenciais inválidas</br>";
       $_SESSION['nivel'] = 0;


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
    echo "<br> ID da sessão:".$_SESSION['SessaoID'];
}

mysqli_query($mysqli,"DELETE from Cliente where Senha = '';");


      ?>
