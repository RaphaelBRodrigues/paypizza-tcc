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
$dados = mysqli_query($con,"SELECT * from carrinho inner join Produto where Carrinho.ProdutoID = Produto.ProdutoID and Sessao = $Sessao");
while ($row = mysqli_fetch_array($dados)) {
  if($Cliente == $row['ClienteID']){
  echo $row['Nome']."<br>";
}}


?>