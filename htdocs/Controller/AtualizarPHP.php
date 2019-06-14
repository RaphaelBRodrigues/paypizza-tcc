
<?php
include('config.php');
        $in1 = $_GET['in1'];
        $in2 = $_GET['in2'];
        $in3 = $_GET['in3'];
        $in4 = $_GET['in4'];

if (mysqli_query($mysqli,"UPDATE `Produto` SET `Nome` = '$in1', `imagem` = '$in4', `Preco` = $in2 where ProdutoID = $in3;")) {
  mysqli_query($mysqli,"UPDATE `Produto` SET `Nome` = '$in1', `imagem` = '$in4', `Preco` = $in2 where ProdutoID = $in3;");
echo "Produto Atualizado com sucesso";
}else{
  echo "Falha na atualização do produto";
}


?>
