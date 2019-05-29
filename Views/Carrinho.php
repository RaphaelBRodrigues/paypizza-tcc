!<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    session_start();
    include_once('../Controller/config.php');

    ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="pi" method="post" action="../Controller/CarrinhoPHP.php">
      OP1:<input type="number" name="in1" value = "0"/><br>
      OP2:<input type="number" name="in2" value = "0"/><br>
      OP3:<input type="number" name="in3" value = "0"/><br>
      OP4:<input type="number" name="in4" value = "0"/><br>
      OP5:<input type="number" name="in5" value = "0"/><br>
      OP6:<input type="number" name="in6" value = "0"/><br>
      OP7:<input type="number" name="in7" value = "0"/><br>
      OP8:<input type="number" name="in8" value = "0"/><br>
      OP9:<input type="number" name="in9" value = "0"/><br>
      OP10:<input type="number" name="in10" value = "0"/><br>
      OP11:<input type="number" name="in11" value = "0"/><br>
      OP12:<input type="number" name="in12" value = "0"/><br>
      OP13:<input type="number" name="in13" value = "0"/><br>
      OP14:<input type="number" name="in14" value = "0"/><br>
<button type="submit">CONFIRMAR COMPRA</button>
    </form>
  </body>
</html>
