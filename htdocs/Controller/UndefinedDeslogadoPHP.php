<?php
//Tirando Undefined controller 
if($_SESSION['logado'] == false){
if(empty($textoDeslogado)){
	$textoDeslogado = 'para realizar compras';

}
Echo "<a href='../Views/Login.php'>Efetue o login</a> $textoDeslogado ";
$_SESSION['logado'] = false;
$_SESSION['Nivel'] = 0;
 $_SESSION['nome']= "Desconectado";
$_SESSION['username'] = "Desconectado";
$username = "Desconectado";
$password = "Desconectado";
$Nivel = 0; 
$Carrinho = 0;
$ClienteID = 0;
$_SESSION['ClienteID'] = 0;
$_SESSION['SessaoID'] = 0;
$SessaoID = 0;
$_GET['Carrinho'] = 0;
$sessao = 0;
$_GET['username'] = "Desconectado";
$_GET['password'] = "Desconectado";

  }

?>