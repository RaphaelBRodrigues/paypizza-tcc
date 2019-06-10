<?php
include_once('config.php');
session_start();

$cons2 = mysqli_query($mysqli,"SELECT * from Produto where CategoriaID = $tipo");
          echo "<br>";

          while ($imp2 = mysqli_fetch_array($cons2)) {

          echo "<tr>";
          echo "<td>Nome:" . $imp2['Nome'] . " </td><br>";
          echo "<td>Preço:" . $imp2['Preco'] . " </td><br><br><br>";
          echo "<a href='Atualizar.php?id=".$imp2['ProdutoID']."'>Editar Produto</a><br>
          <form class='' action='../Controller/DeletarPHP.php' method='get'>
            <button type='submit' value=".$imp2['ProdutoID']." name='apagar'>Deletar</button>
          </form>";echo"
          <form class='' action='#' method='get'>
            <button type='submit' value=".$imp2['ProdutoID']." name='comprar'>Adicionar ao carrinho</button>
          </form>";
          echo "</tr> <br><br><br>";



        }

        $click = $_GET['comprar'];
        $ClienteID = $_SESSION['ClienteID'];

        $dados = mysqli_query($con,"SELECT * from compra inner join Produto
  /*inner join cliente*/ where ClienteID = $ClienteID ;");

        while ($row = $dados->fetch_assoc()) {
          ECHO "ClienteID:". $row['ClienteID'];
          echo "<br><br>";
  }


  if(isset($click)){
  if (mysqli_query($mysqli,
  "INSERT INTO `compra` (`CompraID`, `ProdutoID`, `ClienteID`) VALUES (null, '$click', '$ClienteID');")) {
  Echo "Compra realizada com sucesso";
  }
  mysqli_query($mysqli,
  "INSERT INTO `compra` (`CompraID`, `ProdutoID`, `ClienteID`) VALUES (null, '$click', '$ClienteID');");
  }
/*
$cons2 = mysqli_query($mysqli,"SELECT * from produto where CategoriaID = $tipo");
          echo "<br>";

          while ($imp2 = mysqli_fetch_array($cons2)) {

          echo "<tr>";
          echo "<td>" . $imp2['Nome'] . " </td>";
          echo "<td>" . $imp2['Preco'] . " </td>";
          echo "
          <form class='' action='../Controller/DeletarPHP.php' method='get'>
            <button type='submit' value=".$imp2['ProdutoID']." name='apagar'>Deletar</button>
          </form>";
          echo "</tr> <br>";

        }*/
?>
