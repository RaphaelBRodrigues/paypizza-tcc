<?php

include_once('config.php');
session_start();


$nivel = $_SESSION['Nivel'];
$cons2 = mysqli_query($mysqli,"SELECT * from Produto where CategoriaID = $tipo");

          echo "<br>";

          while ($imp2 = mysqli_fetch_array($cons2)) {
          echo "<tr>";
                    echo "<img src=". $imp2['imagem'] .">";

          echo "<td>Nome:" . $imp2['Nome'] . " </td><br>";
          echo "<td>Preço:" . $imp2['Preco'] . " </td><br><br><br>";
          if($nivel == 2 || $nivel > 2){ 

          echo "<a href='Atualizar.php?id=".$imp2['ProdutoID']."'>Editar Produto</a><br>
          <form class='' action='../Controller/DeletarPHP.php' method='get'>
            <button type='submit' value=".$imp2['ProdutoID']." name='apagar'>Deletar</button>
          </form>";}
          echo"
          <form class='' action='#' method='get'>
            <button type='submit' value=".$imp2['ProdutoID']." name='Carrinho'>Adicionar ao carrinho</button>
          </form>";
          echo "</tr> <br><br><br>";



        }


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


if(isset($click)){
if (mysqli_query($mysqli,
"INSERT INTO `Carrinho` ( `ProdutoID`, `ClienteID`) VALUES ($Sessao, '$click', '$ClienteID');")) {
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
