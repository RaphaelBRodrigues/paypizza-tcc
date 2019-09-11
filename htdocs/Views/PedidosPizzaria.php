<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include("../Controller/PedidosPizzariaPHP.php"); ?>
  </head>
  <body>
<form class="" action="PedidosPizzaria.php" method="get">
<label for="select">Selecione o tipo de pedidos que você deseja visualizar</label>
<select  id='select' name="tipoPedido">

  <option value='1' >Em processo</option>
    <option value='2'>Pronto</option>
    <option value='3'>À Caminho</option>
    <option value='4'>Entregue</option>
    <option value='0' >Cancelado</option>


</select>
<button type="submit" name="button">Consultar</button>
</form>
  </body>
</html>
