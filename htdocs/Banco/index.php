<?php
include('config.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$show = mysqli_query($sql, "SELECT * FROM departamento");

while ( $show2 = mysqli_fetch_array($show))
{
  echo $show2['DepartamentoID'];
  echo "-";
  echo $show2['Nome'];
  echo "<Br>";
}
?>
  </body>
</html>
