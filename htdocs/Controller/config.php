<?php
//LOCAL
$databaseHost = 'localhost';
$databaseName = 'tcc';
$databaseUsername = 'PayPizza';
$databasePassword = 'paypizza';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);


//EPIZY
/*$databaseHost = 'sql203.epizy.com';
$databaseName = 'epiz_23520784_PayPizza';
$databaseUsername = 'epiz_23520784';
$databasePassword = 'paypizza2019';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);

*/
$con = $mysqli;


?>
