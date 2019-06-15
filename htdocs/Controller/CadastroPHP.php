
<?php
session_start();

include_once('config.php');
//Undefined error
if(empty($_POST['termos'])){
$_POST['username'] = " ";
$_POST['password'] = " ";
$_POST['bairro'] = " ";
$_POST['cpf'] = " ";
$_POST['rua'] = " ";
$_POST['ncasa'] = " ";
$_POST['data'] = " ";
$_POST['nome'] = " ";

}
$user = $_POST['username'];
$pass = $_POST['password'];
$end = $_POST['bairro'];
$end2 = $_POST['rua'];
$nca = $_POST['ncasa'];
$data = $_POST['data'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
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
if(isset($_POST['termos'])){
	if($_POST['termos'] == 1){
			if(isset($user) || isset($end) || isset($end2) || isset($nca) || isset($pass) || isset($user)){
	if(mysqli_query($con,"INSERT INTO `Cliente` (`ClienteID`, `Nome`, `Bairro`, `Rua`, `Ncasa`, `Senha`, `Usuario`)
															                                     VALUES (null, '$user', '$end ', '$end2', '$nca', '$pass', '$user')")){
mysqli_query($con,"INSERT INTO `Cliente` (`ClienteID`, `Nome`, `Bairro`, `Rua`, `Ncasa`, `Senha`, `Usuario`)
	                                     VALUES (null, '$user', '$end ', '$end2', '$nca',  ( SELECT PASSWORD('$pass') ), '$user')");

echo "Cadastro realizado com sucesso";
}}else{

	echo "Cadastro falhou";

}
	}
}
													

																			 /*
if(){
$_SESSION['logado'] = true;
$_SESSION['nome'] = $username;
}*/
//mysqli_query($con,"INSERT INTO Cliente VALUES('9','$nome')");

/*mysqli_query($mysqli,"INSERT INTO Cliente VALUES(99,"$_POST['nome']",$_POST['data'],'$_POST['endere�o']','$_POST['password']','$_POST['username']','$_POST['ncasa']','$_POST['cpf']')");
*/


/*if (mysql_query($mysqli,"INSERT INTO cliente VALUES(3,'Rap','2001-05-11','ende','56as','user','ns','sad')" )) {
  echo "<h1>Cadastro Completo</h1>";

}*/

?>
