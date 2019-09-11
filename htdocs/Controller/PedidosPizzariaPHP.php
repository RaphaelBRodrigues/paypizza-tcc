<?php
include("config.php");
$dados = mysqli_query($con,"SELECT * FROM Compra INNER JOIN carrinho where Compra.Sessao = carrinho.Sessao");
while($row = mysqli_fetch_array($dados)){
  echo "<br>Compra ID:".$row['CompraID'];
  echo "<br>Valor:".$row['Total'];
  $prod = mysqli_query($con,"SELECT * from carrinho inner join Produto  where Sessao = ".$row['Sessao']." and Carrinho.ProdutoID = Produto.ProdutoID ");
  echo "<BR>PRODUTOS:";

  while($row1 = mysqli_fetch_array($prod)){
    echo "<br>".$row1['Nome']."<br>";
  }
  echo"<br><br>";
}
 ?>
