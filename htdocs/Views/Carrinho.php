
    <?php
    include_once('../Views/cabecalho.php');
    session_start();
    include_once('../Controller/config.php');

    ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="carrinho-bloco" >
  <center>
  <img class='carrinho-img' src="https://i.pinimg.com/originals/07/d0/bc/07d0bc871664d44b9b411c67221335e4.jpg" alt="">
    <ul>
      <li>Nome:</li>
      <li>Preço:</li>
      <form action='../Controller/DeletarPHP.php'>
      	<button name='del' value='".$row['ProdutoID']."' >Tirar do carrinho</button>
      </form>
    </ul>
</center>
    </div>











     <?php
    if($_SESSION['logado'] == true){
    include_once('../Controller/CarrinhoPHP.php');
}else{
  echo "<p><a href='Login.php'>Efetue o login</a></p>";
}

    ?>
  </body>
</html>
<style media="screen">
.carrinho-bloco{
list-style-type: none;
}
  .carrinho-img{
    height: 20em;
  }
</style>
