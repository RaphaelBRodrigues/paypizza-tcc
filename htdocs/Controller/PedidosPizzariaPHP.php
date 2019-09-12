<?php
include("config.php");
$tipo = $_GET['tipoPedido'];

if (empty($tipo)) {
$_GET['tipoPedido'] = 1;
$tipo = 1;
}


if (!empty($tipo)) {
if ($tipo == 1) {
  $status = "Em Processo";
}
if ($tipo == 2) {
  $status = "Pronto";
}
if ($tipo == 3) {
  $status = "A caminho";
}
if ($tipo == 4) {
  $status = "Entregue";
}
if ($tipo == 0) {
  $status = "Cancelado";
}

  echo "<h1>Status:".$status."</h1>";

//Pedidos em progresso
$dados = mysqli_query($con,"SELECT * FROM Compra INNER JOIN carrinho INNER JOIN cliente where cliente.clienteID = Compra.clienteID and Compra.Sessao = carrinho.Sessao and Compra.Statuss = $tipo");
while($row = mysqli_fetch_array($dados)){
  echo "<br>Compra ID:".$row['CompraID'];
  echo "<br>Horário do pedido:".$row['horario'];
  echo "<br>Nome do cliente :".$row['Nome'];
  echo "<br>Valor:".$row['Total'];
  $prod = mysqli_query($con,"SELECT * from carrinho inner join Produto  where Sessao = ".$row['Sessao']." and Carrinho.ProdutoID = Produto.ProdutoID ");
  echo "<BR>PRODUTOS:";


echo "<ul>";
  while($row1 = mysqli_fetch_array($prod)){
    echo "<br><li>".$row1['Nome']."</li><br>";
  }
  echo "</ul>";

  echo "<br>
  <form action='../Controller/attStatusPHP.php' id='ob' method='get'>
  <select  name='status' >
  <option value='1' '>Em processo</option>
    <option value='2'>Pronto</option>
    <option value='3'>À Caminho</option>
    <option value='4'>Entregue</option>
    <option value='0' >Cancelado</option>

  </select>
  <button type='submit' name='ob' value='".$row["CompraID"]."'>Atualizar</button>
</form>
  ";

  echo"<hr><br><br>";


}


}



if (!empty($_GET["msg"])) {
  echo "<script>alert('O status do pedido'+".$_GET['msg']."+' foi alterado');</script>";
}
 ?>
