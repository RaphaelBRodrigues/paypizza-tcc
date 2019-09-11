
<?php
//del apaga do Carrinho
//apagar apaga de tudo
include('config.php');
        include_once('UndefinedDeslogadoPHP.php');

    $PAR = $_GET['apagar'];
    if(isset($PAR)){
    if(mysqli_query($mysqli,"DELETE from Produto where ProdutoID = $PAR")){
mysqli_query($mysqli,"DELETE from Produto where ProdutoID = $PAR;");
echo "Produto deletado com sucesso! <br>
 <a href='javascript:history.back();'>Voltar para o cardápio</a>
";
}else{
  echo "Falha ao deletar produto  <br> <a href='javascript:history.back();'>Voltar para o cardápio</a>";

}
}
$del = $_GET['del'];
if(isset($del)){

	if(mysqli_query($mysqli,"DELETE from Carrinho where ProdutoID = $del")){
mysqli_query($mysqli,"DELETE from Carrinho where ProdutoID = $del;");
echo "Produto deletado com sucesso! <br>
 <a href='javascript:history.back();'>Voltar para o cardápio</a>
";
}else{
  echo "Falha ao deletar produto  <br> <a href='javascript:history.back();'>Voltar para o cardápio</a>";

}
}
echo " <a href='../Views/Cardapio.php'><small>Voltar para o cardápio</small></a>"

?>
