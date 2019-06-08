<?php
#Local
$databaseHost = 'localhost';
$databaseName = 'tcc';
$databaseUsername = 'PayPizza';
$databasePassword = 'paypizza';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);


#Host Epizy
/*
$databaseHost = 'ftpupload.net';
$databaseName = 'epiz_23520784_PayPizza';
$databaseUsername = 'epiz_23520784';
$databasePassword = 'paypizza2019';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);

$con = $mysqli;

*/
$con = $mysqli;


?>
