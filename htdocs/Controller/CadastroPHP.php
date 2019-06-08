
<?php
session_start();

include_once('config.php');

$user = $_GET['username'];
$pass = $_GET['password'];
$end = $_GET['bairro'];
$end2 = $_GET['rua'];

$nca = $_GET['ncasa'];
$data = $_GET['data'];
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$id = null;/*
echo "$user <br>";
echo "$pass <br>";
echo "$end <br>";
echo "$nca<br>" ;
echo "$data<br>";
echo "$nome<br>";

echo "$id<br>";
*/



/*mysqli_query($mysqli,"INSERT INTO Cliente VALUES('669', 'asfas', '2010-02-26', 'axaf', 'fasf', 'fasfsa', '6', '42');");*/

//mysqli_query($con,"INSERT INTO `Cliente`(ClienteID, Nome, Nascimento, Endere�o, Senha, Usuario, Ncasa, cpf)
                            //              VALUES(null,'$nome','$data','$end','$pass','$user','$nca','$cpf')");
mysqli_query($con,"INSERT INTO `Cliente` (`ClienteID`, `Nome`, `Bairro`, `Rua`, `Ncasa`, `Senha`, `Usuario`) 
	                                     VALUES (null, '$user', '$end ', '$end2', '$nca', '$pass', '$user')");/*
if(){
$_SESSION['logado'] = true;
$_SESSION['nome'] = $username;
}*/
//mysqli_query($con,"INSERT INTO Cliente VALUES('9','$nome')");

/*mysqli_query($mysqli,"INSERT INTO Cliente VALUES(99,"$_GET['nome']",$_GET['data'],'$_GET['endere�o']','$_GET['password']','$_GET['username']','$_GET['ncasa']','$_GET['cpf']')");
*/


/*if (mysql_query($mysqli,"INSERT INTO cliente VALUES(3,'Rap','2001-05-11','ende','56as','user','ns','sad')" )) {
  echo "<h1>Cadastro Completo</h1>";

}*/

?>
