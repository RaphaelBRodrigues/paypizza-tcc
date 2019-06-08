<?php
include_once('config.php');

//Cadastrp
$nome = $_GET['nome'];
$pre = $_GET['pre'];
$tipo = $_GET['id'];
$catt = $_GET['cat'];
if(mysqli_query($mysqli,"INSERT INTO `Produto` VALUES(null,'$nome',$catt,'$pre',$catt)")){
mysqli_query($mysqli,"INSERT INTO `Produto` VALUES(null,'$nome',$catt,'$pre',$catt)");
echo "
Produto Cadastrado com sucesso!

";
}else{
  echo "
Falha na realização do cadastro!
  ";
}

//Tabela Categoria

$cons = mysqli_query($mysqli,"SELECT Nomee from Categoria where CategoriaID=$tipo;");
/*echo "

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

          echo "<th scop='row'>" . $imp['CategoriaID'] . " </td>";
          echo "<th scop='row'>" . $imp['Nomee'] . " </td>";
          echo "</tr> <br>";

        }*/


$cons2 = mysqli_query($mysqli,"SELECT * from Categoria");

mysqli_query($mysqli,"DELETE FROM `Produto` WHERE Nome=' ' or Nome='' ");


 ?>
