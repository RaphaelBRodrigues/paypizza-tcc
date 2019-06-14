 <?php
 session_start();

 include_once('config.php');

   $username = $_POST['username'];
   $password = $_POST['password'];
if(empty($username) || empty($password) ){
echo "Preencha os campos <br><br>";
}

  //Consulta

      $dados = mysqli_query($con,'SELECT * FROM `Funcionario`');
if($_SESSION['logado'] == false){
             echo "Lista de Funcionarios";
           }
        echo "<br>";

      while ($row = $dados->fetch_assoc()) {

     echo "<br>";


        if($username == $row['Usuario']){
        if ($password == $row['Senha']) {

         $_SESSION['logado'] = true;
         $_SESSION['Nivel'] = $row['Nivel'];

         $_SESSION['nome'] = $username;
$_SESSION['FuncionarioID'] =  $row['FuncionarioID'];
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

       echo $row['FuncionarioID'];
echo "-";
       echo $row['Usuario'];
       echo "<br>";
     }

      }
      ECHO "<br>";ECHO "<br>";

if( $_SESSION['logado'] == true){
echo $_SESSION['Nivel'];
    echo "LOGIN EFETUADO COM SUCESSO,BEM VINDO ".$_SESSION['nome'];

}

mysqli_query($mysqli,"DELETE from Cliente where Senha = '';");


      ?>
