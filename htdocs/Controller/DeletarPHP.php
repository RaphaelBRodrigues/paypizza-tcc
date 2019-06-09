
<?php
include('config.php');

    $PAR = $_GET['apagar'];
    if(mysqli_query($mysqli,"DELETE from Produto where ProdutoID = $PAR")){
mysqli_query($mysqli,"DELETE from Produto where ProdutoID = $PAR;");
echo "Produto deletado com sucesso";
}else{
  echo "Falha ao deletar produto";

}



?>
