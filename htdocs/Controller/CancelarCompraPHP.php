<?php

include_once('config.php');

@session_start();
$del = $_GET['del'];
if(isset($del)){

	if(mysqli_query($mysqli,"DELETE from Compra where CompraID = $del")){
mysqli_query($mysqli,"DELETE from Compra where CompraID = $del;");
echo "Compra cancelada com sucesso! <br>
 <a href='../Views/Carrinho.php'>Voltar para o carrinho</a>
";
}else{
	Header("Location: ../Index.php");

}
}
?>
