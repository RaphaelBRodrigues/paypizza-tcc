<?php
include("config.php");

$compraID = $_GET['ob'];
$newStatus = $_GET['status'];
echo $compraID;
if (mysqli_query($con,"UPDATE compra SET Statuss = $newStatus WHERE CompraID = $compraID ")) {
  mysqli_query($con,"UPDATE compra SET Statuss = $newStatus WHERE CompraID=  $compraID;
");
  echo "<script>console.log('Status do elemento ".$compraID." (ID)foi modificado');</script>";
  Header("Location: ../Views/PedidosPizzaria.php?msg=".$compraID."");
}else{
  echo "<script>console.log('Status do elemento ".$compraID." (ID) falhou');</script>";

}



 ?>
