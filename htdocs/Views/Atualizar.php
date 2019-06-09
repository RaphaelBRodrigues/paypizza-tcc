<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    
<?php
include('../Controller/config.php');
$id = $_GET['id'];
if(empty($id)){
  $id = 0;
}

$s = mysqli_query($mysqli,"SELECT * FROM Produto where ProdutoID = $id;");
while ($ss = mysqli_fetch_array($s)) {

          echo "
          <form action='../Controller/AtualizarPHP.php'>


                                    Dado Atual:     <input   readonly placeholder='Nome:" . $ss['Nome'] . " '>
                                Dado Atual:         <input  readonly placeholder='Preço:" . $ss['Preco'] . " ''>
<br><br>



                               Novo dado:     <input name='in1'    placeholder='Nome:" . $ss['Nome'] . " '>
                                Novo dado:      <input  name='in2' placeholder='Preço:" . $ss['Preco'] . " ''>
                               </td>
                                   <button type='submit' name='in3' value=".$ss['ProdutoID']." >ATUALIZAR</button>

<br><br>
                            </form>
          ";

          echo "<br>";


        }

 ?>
  </body>
</html>
