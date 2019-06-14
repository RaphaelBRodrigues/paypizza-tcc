
<?php
include('config.php');

    $PAR = $_GET['apagar'];
    if(mysqli_query($mysqli,"DELETE from Produto where ProdutoID = $PAR")){
mysqli_query($mysqli,"DELETE from Produto where ProdutoID = $PAR;");
echo "Produto deletado com sucesso! <br>
 <a href='javascript:history.back();'>Voltar para o cardápio</a>
";
}else{
  echo "Falha ao deletar produto  <br> <a href='javascript:history.back();'>Voltar para o cardápio</a>";

}


?>
