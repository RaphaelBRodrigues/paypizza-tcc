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

$dados = mysqli_query($con,"SELECT * from Compra where Sessao = $Sessao");

$row = mysqli_fetch_array($dados);



		echo "Compra efetuada com sucesso";
	mysqli_query($con,"INSERT INTO Compra VALUES(null,$Sessao,$total,$Cliente)");

	



}

else{
	$dados = mysqli_query($con,"SELECT * from Compra where Sessao = $Sessao");

$row = mysqli_fetch_array($dados);
echo "Falha ao realizar a compra,<form action='../Controller/CancelarCompraPHP.php'>
<br><button name='del' value='".$row['CompraID']."'>cancele a anterior</button>
</form> e   <a href='javascript:history.back();'>tente Novamente</a>";
}




?>