<?php

session_start();
$_SESSION['nome'] = "Teste CARRINHO";
include_once('config.php');
if($_SESSION['logado'] == true){
  echo "FOI <br>".$_SESSION['nome']  ;
  echo $_SESSION['nome'] ;
}else{
  echo "não foi";
}
//PIZZA NORMAL
/*$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P1'] = $_POST['in1'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P2'] = $_POST['in2'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P3'] = $_POST['in3'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P4'] = $_POST['in4'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P5'] = $_POST['in5'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P6'] = $_POST['in6'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P7'] = $_POST['in7'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P8'] = $_POST['in8'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P9'] = $_POST['in9'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P10'] = $_POST['in10'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P11'] = $_POST['in11'];
$__SESSION['$total'] = $__SESSION['$total'] + $_SESSION['P12'] = $_POST['in12'];
*/

//MEU
  /*$dados = mysqli_query($con,'SELECT * FROM `Pizzas`');
//$row[] = $dados->fetch_assoc();

    while(false) {
      echo $row['PizzaID'];
    }
  echo $__SESSION['$total'];

*/

$dados = mysqli_query($con,'SELECT * FROM `Cliente`');
/*eu quero jogaaaaaaaaaaaaaaaaaaaaaaaa*/
while ($row = $dados->fetch_assoc()) {
  echo "Nome:".$row['Nome'];

  echo "<br>";
}


?>
