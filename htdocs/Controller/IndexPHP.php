 <?php
   session_start();
                include_once('config.php');


     /*   if($_SESSION['logado'] = true){
          echo "LOGADO";

       }
        else{
          $_SESSION['logado'] = false;
          $_SESSION['nome'] = "Desconectado";
          echo "TESTE";
          echo "<a href='Login.php'>$username</a>";

        }
    if($_SESSION['logado'] == true)
{echo "Usúario logado";
}
else{
  echo '<a href = "Login.php">Você está desconectado,FAÇA O LOGIN</a>';
}*/
  //Verificação do login
  if(isset($_SESSION['logado'])){
    echo "";
  }
 if($_SESSION['logado']==false){
    echo '<a href = "Views/Login.php">Você está desconectado,FAÇA O LOGIN</a>';
  }

  if($_SESSION['logado'] == true)
  {
    echo "Bem vindo ".$_SESSION['nome']."!!";
    echo "
    <form action='Controller/Logout.php'/>
    <button type='submit' value='LOGOUT'>
    </form>";
  }

         ?>
