<?php

include_once('config.php');

$cons2 = mysqli_query($mysqli,"SELECT * from Produto where CategoriaID = $tipo");
          echo "<br>";

          while ($imp2 = mysqli_fetch_array($cons2)) {

          echo "<tr>";
          echo "<td>Nome:" . $imp2['Nome'] . " </td><br>";
          echo "<td>Preço:" . $imp2['Preco'] . " </td><br><br><br>";
          echo "</tr> <br>";

        }
?>
