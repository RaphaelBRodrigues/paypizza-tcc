<script src="jquery-3.4.1.min.js"></script>
<!--
<script type="text/javascript">

function rel(){
 var dt = new Date();
 var hora = dt.getHours() +":"+ dt.getMinutes() +":"+ dt.getSeconds();
 // $("#ho").text("Horário do pedido:"+hora);

document.getElementById("horas").innerHTML = hora;


}
window.addEventListener("load",rel);

</script> -->
<?php
@include_once('config.php');

session_start();

$Sessao = $_SESSION['SessaoID'];
$Cliente = $_SESSION['ClienteID'];
$total = $_GET['compra'];


$hor = $_GET['horario'];

if(mysqli_query($con,"INSERT INTO Compra(CompraID, Sessao, Total, ClienteID,horario) VALUES(null,$Sessao,$total,$Cliente,'$hor')")){

	// echo $total; echo "<br>";
	// echo $Cliente;echo "<br>";
	// echo $Sessao;echo "<br>";
$dados = mysqli_query($con,"SELECT * from Compra INNER JOIN cliente where Sessao = $Sessao");
// header("Location: ../Views/Compra.php");
$row = mysqli_fetch_array($dados);



	mysqli_query($con,"INSERT INTO Compra(CompraID, Sessao, Total, ClienteID,horario) VALUES(null,$Sessao,$total,$Cliente,'$hor')");
	echo "Compra efetuada com sucesso

	<ul>
	<li>Horário do pedido:<span id='horas'>".$hor."</span></li>
		<li>Endereço a ser entregue:Bairro:".$row['Bairro'].",Rua:".$row['Rua'].",Número da casa:".$row['Ncasa']."</li>
		<li>Nome do cliente:".$row['Nome']."</li>
		<li>Número do pedido:".$Sessao."</li>
		<li>Total:R$".$total."</li>
		<a href='../Views/Pedidos.php'>Veja seus pedidos ativos</a>
	</ul>

	";



}

else{
	$dados = mysqli_query($con,"SELECT * from Compra where Sessao = $Sessao");

$row = mysqli_fetch_array($dados);
echo "Falha ao realizar a compra pois um pedido foi realizado recentemente,inicie outra sessão ou <a href='../Views/Pedidos.php'>cancele a compra anterior</a>";
}




?>
