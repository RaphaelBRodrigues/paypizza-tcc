<?php

session_start();

include_once('config.php');


/*if($_SESSION['logado'] == true){
  echo "FOI <br>".$_SESSION['nome']  ;
  echo $_SESSION['nome'] ;
}else{
  echo "não foi";
}*/
$Sessao = $_SESSION['SessaoID'];
$Cliente = $_SESSION['ClienteID'];
$total = 0;
$dados = mysqli_query($con,"SELECT * from carrinho inner join Produto where Carrinho.ProdutoID = Produto.ProdutoID and Sessao = $Sessao");
while ($row = mysqli_fetch_array($dados)) {
  if($Cliente == $row['ClienteID']){
  echo $row['Nome']."| R$";
    echo $row['Preco']."<br>";
    echo "
<form action='../Controller/DeletarPHP.php'>
	<button name='del' value='".$row['ProdutoID']."' >X</button>
</form>
    ";

$total = $total +$row['Preco'];
}}
$_SESSION['total'] = $total;
mysqli_query($con,"INSERT * from Compra VALUES($sessao,$total,$ClienteID)");
echo "Total:R$".$total;
echo "<br> <form action='../Controller/CompraPHP.php'>
<br><button name='compra' value='$total'>CONFIRMAR COMPRA</button>
</form>
";

?>
