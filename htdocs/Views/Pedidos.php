<!-- 1 = Pedidos ativos 2 =  Pedidos antigos -->

<?php
include_once("../Controller/Config.php");
@session_start();
//PEDIDOS DO CLIENTE
$cl = $_SESSION['ClienteID'];
$dados = mysqli_query($con,"SELECT * from Compra INNER JOIN cliente where compra.ClienteID = $cl and Statuss = 1");
echo "Pedido ativo";
while($row = mysqli_fetch_array($dados)){
echo "

	<ul>
	<li >Horário do pedido:<span id='horas'>".$row['horario']."</span></li>
		<li>Endereço a ser entregue:Bairro:".$row['Bairro'].",Rua:".$row['Rua'].",Número da casa:".$row['Ncasa']."</li>
		<li>Nome do cliente:".$row['Nome']."</li>
	<li>Número do pedido:".$row['Sessao']."</li>
		<li>Total:R$".$_SESSION['total']."</li>
		<a href='../Views/Cardapio.php'>Volte para o cardápio</a>
	</ul>
<form action='../Controller/CancelarCompraPHP.php'>
<br><button name='del' value='".$row['CompraID']."'>Cancelar Pedido</button>
</form>
";
}
echo "Pedidos Passados";


$dados = mysqli_query($con,"SELECT * from Compra INNER JOIN cliente where compra.ClienteID = $cl and Statuss = 0");
while($row = mysqli_fetch_array($dados)){
echo "

	<ul>
	<li >Horário do pedido:<span id='horas'>".$row['horario']."</span></li>
		<li>Endereço a ser entregue:Bairro:".$row['Bairro'].",Rua:".$row['Rua'].",Número da casa:".$row['Ncasa']."</li>
		<li>Nome do cliente:".$row['Nome']."</li>
		<li>Número do pedido:".$row['Sessao']."</li>
		<li>Total:R$".$_SESSION['total']."</li>
		<a href='../Views/Cardapio.php'>Volte para o cardápio</a>
	</ul>
";

//Produtos REALIZADOS EM CADA COMPRA ESPECÍFICA 
// $pro = mysqli_query($con,"SELECT * FROM Carrinho inner join produto where Sessao = ".$row['Sessao']."");
// while($dutos = mysqli_fetch_array($pro)){
// Echo "Produtos comprados nessa compra:";
//   echo $dutos['Nome']."<br>";
// }
}
?>

<a href='../Views/Cardapio.php'>Volte ao cardápio</a>;
