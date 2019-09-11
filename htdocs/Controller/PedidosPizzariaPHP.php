<?php
include("config.php");
$dados = mysqli_query($con,"SELECT * FROM Compra INNER JOIN carrinho where Compra.Sessao = carrinho.Sessao");
while($row = mysqli_fetch_array($dados)){
  echo "<br>Compra ID:".$row['CompraID'];
  echo "<br>Horário :".$row['horario'];
  echo "<br>Valor:".$row['Total'];
  $prod = mysqli_query($con,"SELECT * from carrinho inner join Produto  where Sessao = ".$row['Sessao']." and Carrinho.ProdutoID = Produto.ProdutoID ");
  echo "<BR>PRODUTOS:";

  echo "<br>
  <form action='../Controller/attStatusPHP.php' method='get'>
  <select>
    <option value='0' name='status'>Cancelado</option>
    <option value='1' name='status'>Em processo</option>
    <option value='2' name='status'>Pronto</option>
    <option value='3' name='status'>À Caminho</option>
    <option value='4' name='status'>Entregue</option>
  </select>
  <button type='submit'>Atualizar</button>
</form>
  ";

  while($row1 = mysqli_fetch_array($prod)){
    echo "<br>".$row1['Nome']."<br>";
  }

  echo"<br><br>";
}
 ?>
