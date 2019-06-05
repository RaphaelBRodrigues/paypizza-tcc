<!DOCTYPE html>
<?php
include_once('../Controller/config.php');
include_once('../Controller/PizzasPHP.php');

$tipo = 1;
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $cons2 = mysqli_query($mysqli,"SELECT * from produto");
    					echo "<br>";

    					while ($imp2 = mysqli_fetch_array($cons2)) {

    					echo "<tr>";
    					echo "<td>" . $imp2['Nome'] . " </td>";
    					echo "<td>" . $imp2['Preco'] . " </td>";
    					echo "</tr> <br>";

    				}
    				?>
    			</tbody>

    			</table>
    </body>
  </body>
</html>
