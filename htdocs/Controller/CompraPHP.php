<?php
include_once('config.php');

session_start();

$Sessao = $_SESSION['SessaoID'];
$Cliente = $_SESSION['ClienteID'];
$total = $_GET['compra'];
echo $total; echo "<br>";
echo $Cliente;echo "<br>";
echo $Sessao;echo "<br>";
if(mysqli_query($con,"INSERT INTO Compra VALUES(null,$Sessao,$total,$Cliente)")){
	echo "Compra efetuada com sucesso";
	mysqli_query($con,"INSERT INTO Compra VALUES(null,$Sessao,$total,$Cliente)");

}else{
echo "Falha ao realizar a compra  <a href='javascript:history.back();'>tente Novamente</a>";}

?>