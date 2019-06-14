

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv=”content-type” content="text/html;" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon"  href="https://travelpedia.com.br/wp-content/uploads/2017/11/food-icon2.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="estiloLogin.css">



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</head>

		<body>

			<div class="corpo">

				<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #B2002A; border-bottom: 0px;" >
					<div class="container">


						<div class="navbar-header">


						<a href="../index.php">	 <img id="img_pizza_logo" src="https://cdn4.iconfinder.com/data/icons/food-and-drink-1-2/64/pizza-food-italian-meal-512.png"></a>
							 <a href="../index.php">	<p id="nome_logo">PayPizza</p></a>


							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#links-menu" style="background-color: white;">
								<i class="material-icons">menu</i>

							</button>
						</div>


						<nav id="links-menu" class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">


										<li><a href="cardapio.php"> <p class="menu_cabeça"> Cardápio </p></a></li>
								<li><a href="#"> <p  class="menu_cabeça">Promoções</p></a></li>
								<li><a href="#"> <p class="menu_cabeça">Quem Somos</p></a></li>


								<li><a href="#" class="menu_cabeça"><i class="material-icons" style="color: white;">shopping_cart</i></a></li>
                  <li><a href="#"> <p class="menu_cabeça pessoa"><i class="material-icons" style="color: white;">person</i></a></li>

							</ul>
						</nav>
					</div>
				</nav>

          <section>


                          <?php
                          session_start();





                        ?>


                           <?php

                                            include_once('../Controller/config.php');
                                            ?>

                          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


                          <form method="post" action="../Controller/LoginFuncionarioPHP.php" class="login">
                                            <h2>Login</h2>
                                            <div class="input-icon">

                                                   <i class="material-icons "  id="chato">person</i>
                                                      <input type="text" name="username" id="i1" class="input" required placeholder="Nome de usuário"/><br><br>

                                                       <i class="material-icons" id="chato">vpn_key</i>
                                                <input type="password" required name="password" id="i2" class="input" required placeholder="Senha"/><Br><br>
                                                                    <input type="submit" id="i3" placeholder="Enviar" class="button-login"/>
                                                                                    <p id="cadastrar"><a href="Cadastro.php">cadastrar</a></p>

                                            </div>




                                            </form>
                                            <br>

                                            <<?php
                                             include_once('../Controller/LoginFuncionarioPHP.php');

                                                ?>
                      </section>





      </div>

</body>
</html>
