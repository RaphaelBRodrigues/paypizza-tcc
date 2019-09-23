
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv=”content-type” content="text/html;" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon"  href="https://travelpedia.com.br/wp-content/uploads/2017/11/food-icon2.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet" type="text/css" href="estiloLogin.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</head>

		<body>

			<div class="corpo">
<!--
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
				</nav> -->

          <section>


                          <!-- <?php
                          session_start();





                        ?>


                           <?php

                                            include_once('../Controller/config.php');
                                            ?>

                          <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


                          <form method="post" action="Login.php" class="login">
                                            <h2>lo</h2>
                                            <div class="input-icon">

                                                   <i class="material-icons "  id="chato">person</i>
                                                      <input type="text" name="username" id="i1" class="input" required placeholder="Nome de usuário"/><br><br>

                                                       <i class="material-icons" id="chato">vpn_key</i>
                                                <input type="password" required name="password" id="i2" class="input" required placeholder="Senha"/><Br><br>
                                                                    <input type="submit" id="i3" placeholder="Enviar" class="button-login"/>
                                                                <p id="cadastrar"><a href="Cadastro.php">cadastrar</a></p>

                                            </div> -->





                                             <<?php
                                             include_once('../Controller/LoginPHP.php');

                                                ?>
                      </section> -->

                      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                      <!------ Include the above in your HEAD tag ---------->

                      <!DOCTYPE html>
                      <html>


                      <head>
                      	<title>My Awesome Login Page</title>

                      </head>
                      <!--Coded with love by Mutiullah Samim-->
                      <body>
                          <form class="" action="Login.php" method="post">


                      	<div class="container h-100">
                      		<div class="d-flex justify-content-center h-100">
                      			<div class="user_card">
                      				<div class="d-flex justify-content-center">
                      					<div class="brand_logo_container">
                      						<img src="https://seeklogo.com/images/P/pizza-logo-9092058631-seeklogo.com.png" class="brand_logo" alt="Logo">
                      					</div>
                      				</div>
                      				<div class="d-flex justify-content-center form_container">
                      					<form>
                      						<div class="input-group mb-3">
                      							<div class="input-group-append">
                      								<span class="input-group-text"><i class="fas fa-user"></i></span>
                      							</div>
                      							<input type="text" name="username" class="form-control input_user" value="" placeholder="Login">
                      						</div>
                      						<div class="input-group mb-2">
                      							<div class="input-group-append">
                      								<span class="input-group-text"><i class="fas fa-key"></i></span>
                      							</div>
                      							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Senha">
                      						</div>
                      						<div class="form-group">
                      							<!-- <div class="custom-control custom-checkbox">
                      								<input type="checkbox" class="custom-control-input" id="customControlInline">
                      								<label class="custom-control-label" for="customControlInline">Remember me</label>
                      							</div> -->
                      						</div>
                      					</form>
                      				</div>
                      				<div class="d-flex justify-content-center mt-3 login_container">
                      					<button type="submit" name="button" class="btn login_btn">Login</button>
                      				</div>
                              <div class="d-flex justify-content-center mt-3 login_container">
                      				<a href="/Views/cadastro.php">	<button  type="button" name="button" class="btn login_btn">Cadastrar</button></a>
                      				</div>
                      				<div class="mt-4">
                      					<div class="d-flex justify-content-center links">
                      						Don't have an account? <a href="Cadastro.php" class="ml-2">Sign Up</a>
                      					</div>
                      					<div class="d-flex justify-content-center links">
                      						<a href="#">Forgot your password?</a>
                      					</div>
                      				</div>
                      			</div>
                      		</div>
                      	</div>

                      </body>
                    </form>
                      </html>



      </div>

</body>
</html>
<style media="screen">
/* Coded with love by Mutiullah Samim */
  body,
  html {
    margin: 0;
    padding: 0;
    height: 100%;
    background: #60a3bc !important;
  }
  .user_card {
    height: 400px;
    width: 350px;
    margin-top: auto;
    margin-bottom: auto;
    background: rgb(183,13,41);
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;

  }
  .brand_logo_container {
    position: absolute;
    height: 170px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: #60a3bc;
    padding: 10px;
    text-align: center;
  }
  .brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
    border: 2px solid white;
  }
  .form_container {
    margin-top: 100px;
  }
  .login_btn {
    width: 100%;
    background: black; !important;
    color: white !important;
  }
  .login_btn:focus {
    box-shadow: none !important;
    outline: 0px !important;
  }
  .login_container {
    padding: 0 2rem;
  }
  .input-group-text {
    background: #c0392b !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
  }
  .input_user,
  .input_pass:focus {
    box-shadow: none !important;
    outline: 0px !important;
  }
  .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #c0392b !important;
  }
</style>
