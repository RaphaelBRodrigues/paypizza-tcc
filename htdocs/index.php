<html>
<?php

                    include_once('Controller/config.php');

                    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv=”content-type” content="text/html;" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" type="text/css" href="Views/estilo.css">
	<link rel="icon"  href="https://image.flaticon.com/icons/png/512/99/99954.png">
	<link rel="stylesheet" type="text/css" href="Views/estilo.css">



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</head>
	<body>
		<body>

			<div class="corpo">

				<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #B2002A; border-bottom: 0px;" >
					<div class="container">


						<div class="navbar-header">


							<img id="img_pizza_logo" src="https://cdn4.iconfinder.com/data/icons/food-and-drink-1-2/64/pizza-food-italian-meal-512.png">
								<p id="nome_logo">PayPizza</p>


							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: white;">
								<i class="material-icons">menu</i>

							</button>
						</div>


						<nav id="links-menu" class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">


								<li><a href="Views/cardapio.php"> <p class="menu_cabeça"> Cardápio</p></a> </li>
								<li><a href="Views/promocao.php"> <p  class="menu_cabeça">Promoções</p></a></li>
								<li><a href="Views/quem.php"> <p class="menu_cabeça">Quem Somos</p></a></li>


								<li><a href="#" class="menu_cabeça"><i class="material-icons" style="color: white;">shopping_cart</i></a></li>
                  <li><a href="Views/Login.php"> <p class="menu_cabeça pessoa"><i class="material-icons" style="color: white;">person</i></a></li>

							</ul>
						</nav>
					</div>
				</nav>
				<header>
					<div class="imagens-side-menu">
						<div class="text-center">
								<img class="imagem-pizza" src="http://cdn.delivoro.com.br/f/public/arquivos/6e0218da0/img/prato/23938.jpg" class="img-fluid" alt="Imagem responsiva">
						</div>
					</div>
					<div class="imagens-side-menu">
						<div class="text-center">
								<img class="imagens-siameses"src="https://www.ofaraopizzaria.com.br/fotos/pizza%20chamada.jpg" class="rounded float-left imagem-pizza" alt="...">
								<img  class="imagens-siameses" src="https://s3-sa-east-1.amazonaws.com/delivery-direto/img/items/5c2502e000da6.jpeg" class="rounded float-right imagem-pizza" alt="...">
						</div>
					</div>
              <div class="promocoes">

              </div>
				</header>
		    </div>
        <div id="php">
        <!-- PHP Cadastro/Index -->
 <?php
                     include_once('Controller/IndexPHP.php');

         ?>


          </div>

</body>

</html>
