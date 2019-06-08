<?php
include_once('config.php');

//Cadastrp
$nome = $_GET['nome'];
$pre = $_GET['pre'];
$tipo = $_GET['id'];
$catt = $_GET['cat'];
if(isset($nome)||isset($pre)||isset($catt)){
mysqli_query($mysqli,"INSERT INTO `Produto` VALUES(null,'$nome',$catt,'$pre',$catt)");
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

if(mysqli_query($mysqli,"INSERT INTO `Produto` VALUES(null,'$nome',$catt,'$pre',$catt)")){
echo "
Produto Cadastrado com sucesso!

";
}else{
  if(isset($nome) || isset($cat))
  echo "
  Falha no  Cadastrado do produto!

  ";

}
mysqli_query($mysqli,"DELETE FROM `Produto` WHERE Nome=' ' or Nome='' ");


 ?>
