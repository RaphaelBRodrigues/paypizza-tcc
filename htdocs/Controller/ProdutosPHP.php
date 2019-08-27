<?php

include_once('config.php');
session_start();

$o = 1;
if (empty($fl)) {
  $fl = 'left';
}
$nivel = $_SESSION['Nivel'];
$cons2 = mysqli_query($mysqli,"SELECT * from Produto where CategoriaID = $tipo");
//Arrumar float
          echo "<br> <br>  <center>";

          while ($imp2 = mysqli_fetch_array($cons2)) {
            $o = $o+1;
            if ($o == ($o%2==0)) {
            $fl = "left";
          }else{
            $fl = "right";
          }
        //  echo $fl;
          echo "<div style='float-".$fl.";'><tr>";
                    echo "<img  class='img-padrao' src=". $imp2['imagem'] ."><br>";

          echo "
<td class='padrao'>Nome:" . $imp2['Nome'] . " </td><br>";
          echo "<td class='padrao'>Preço:" . $imp2['Preco'] . " </td><br><br><br>";
          if($nivel == 2 || $nivel > 2){

          echo "<a id='editar-produtos'  href='Atualizar.php?id=".$imp2['ProdutoID']."'>Editar Produto</a><br>
          <form class='' action='../Controller/DeletarPHP.php' method='get'>
            <button  class='button' type='submit' value=".$imp2['ProdutoID']." name='apagar'>Deletar</button>
          </form>";}
          echo"
          <form class='' action='#' method='get'>
            <button  class='button' type='submit' value=".$imp2['ProdutoID']." name='Carrinho'>Adicionar ao carrinho</button>
          </form><br>
";
          echo "</tr> <div><br><br><br>";



        }
echo "  <center>";

        $click = $_GET['Carrinho'];//Produto
        $ClienteID = $_SESSION['ClienteID'];//Cliente
$Sessao = $_SESSION['SessaoID'];
        $dados = mysqli_query($con,"SELECT * from Carrinho inner join Produto
/*inner join cliente*/ where ClienteID = $ClienteID ;");

        #while ($row = $dados->fetch_assoc()) {
        //  ECHO "ClienteID:". $row['ClienteID'];
          //          ECHO "SessãoID:".$_SESSION['SessaoID'];

          echo "<br><br>";
#}


if(!empty($click)){
if (mysqli_query($mysqli,
"INSERT INTO `Carrinho` ('Sessao',`ProdutoID`, `ClienteID`) VALUES ($Sessao, '$click', '$ClienteID');")) {
Echo "Carrinho realizada com sucesso";
}
  mysqli_query($mysqli,
  "INSERT INTO `Carrinho` (`Sessao`, `ProdutoID`, `ClienteID`) VALUES ($Sessao, '$click', '$ClienteID');");
}
  /*    $pedido = array();

      array_push($pedido, $click);
      $_SESSION['Carrinho'] = $pedido;
}
//print_r($array);
       //echo $array[0];

//$_SESSION[$array[0]] = $pedido ;
$i = 0;
while($i<10){
  $_SESSION[$pedido[0]];
$i = $i+1;
}*/

?>
