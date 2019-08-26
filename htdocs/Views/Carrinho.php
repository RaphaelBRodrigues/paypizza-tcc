
    <?php
    include_once('../Views/cabecalho.php');
    session_start();
    include_once('../Controller/config.php');

    ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
    if($_SESSION['logado'] == true){
    include_once('../Controller/CarrinhoPHP.php');
}else{
  echo "<p><a href='Login.php'>Efetue o login</a></p>";
}

    ?>
  </body>
</html>
