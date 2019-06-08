<?php
include_once('config.php');


$cons2 = mysqli_query($mysqli,"SELECT * from produto where CategoriaID = $tipo");
          echo "<br>";

          while ($imp2 = mysqli_fetch_array($cons2)) {

          echo "<tr>";
          echo "<td>" . $imp2['Nome'] . " </td>";
          echo "<td>" . $imp2['Preco'] . " </td>";
          echo "</tr> <br>";

        }
?>
