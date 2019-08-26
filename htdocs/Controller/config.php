<?php
//LOCAL
session_start();
if($_SESSION['logado'] == false){

        include_once('UndefinedDeslogadoPHP.php');
    }

$databaseHost = 'localhost';
$databaseName = 'tcc';
$databaseUsername = 'PayPizza';
$databasePassword = 'paypizza';
$mysqli = mysqli_connect($databaseHost,
$databaseUsername,$databasePassword,$databaseName);


//EPIZY
//
// $databaseHost = 'sql203.epizy.com';
// $databaseName = 'epiz_23520784_PayPizza';
// $databaseUsername = 'epiz_23520784';
// $databasePassword = 'paypizza2019';
// $mysqli = mysqli_connect($databaseHost,
// $databaseUsername,$databasePassword,$databaseName);


$con = $mysqli;


?>
<!--
Paypizza.epizy.com
HOST:ftpupload.net
USERNAME:epiz_23520784
https://github.com/RaphaelBRodrigues/PayPizza-TCC/tree/master/htdocs
https://github.com/RaphaelBRodrigues/
https://github.com/lucasmofardini/

 -->
