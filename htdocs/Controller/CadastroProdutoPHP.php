<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="get" id="f1" action="CadastroProdutoPHP.php">
    	<b>Cadastre o Produto</b>
    	<br>
    <input type="text"  name="nome" placeholder="Nome">
    <input type="text" name="cat" placeholder="Categoria">
    <input type="text" name="pre" placeholder="Preço">
    <input type="submit" name=""class='btn btn-dark' placeholder="enviar">
    </form>
  </body>
</html>
<?php
include_once('config.php');
$nome = $_GET['nome'];

$cat = $_GET['cat'];
$pre = $_GET['pre'];


mysqli_query($mysqli,"INSERT INTO `produto` VALUES(null,'$nome','$cat','$pre')");


$cons = mysqli_query($mysqli,"SELECT * from categoria;");
echo "

<table class='table table-dark tinny'>
<thead>
    <tr>
      <th scope='col'>Categoria</th>
      <th scope='col'>Nome</th>

    </tr>
  </thead>

  <tbody>
";
        while ($imp = mysqli_fetch_array($cons)) {
          echo "<tr>";
          echo "<th scop='row'>" . $imp['CategoriaID'] . " </td>";
          echo "<th scop='row'>" . $imp['Nomee'] . " </td>";
          echo "</tr> <br>";

        }
        echo "</tbody>";

        echo "</table>";

        echo "<br>";				echo "<br>";
        echo "<br>";

$cons2 = mysqli_query($mysqli,"SELECT * from categoria");




 ?>
