<html>
<head>

 <?php

                    include_once('../Controller/config.php');

                    ?>
    <meta charset="utf-8">
    <meta http-equiv=”content-type” content="text/html;" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Cardápio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="icon"  href="https://travelpedia.com.br/wp-content/uploads/2017/11/food-icon2.png">
  <link rel="stylesheet" type="text/css" href="estilo.css">



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
  <body>
    <body>

      <div class="corpo">

        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #B2002A; border-bottom: 0px;" >
          <div class="container">


            <div class="navbar-header">


            <a href="../index.php">  <img id="img_pizza_logo" src="https://cdn4.iconfinder.com/data/icons/food-and-drink-1-2/64/pizza-food-italian-meal-512.png"></a>
               <a href="../index.php">  <p id="nome_logo">PayPizza</p></a>


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

              </ul>
            </nav>
          </div>
        </nav>



                    <!-- <form method="get" action="Cadastro.php">
                    <h2>Cadastro</h2>


                        <input class="w3-input w3-animate-input" name="username" id="i1" type="text"placeholder="Nome de usuárior" style="width:30%"><br><br>




                           <i class="material-icons">vpn_key</i>
                             <input class="w3-input w3-animate-input" id="i2"class="input" name="username" id="i1" type="password"placeholder="Nome de usuárior" style="width:30%">
                    <input  name="password" id="i2" class="input" placeholder="Senha"/><Br><br>

                          <i class="material-icons">home</i>
                    <input type="text" name="endereço" id="i3" class="input" placeholder="Endereço"/><br><br>

                    <i class="material-icons">add_location  </i>
                    <input type="text" name="ncasa" id="i4" class="input" placeholder="Número da casa"/><br><br>

                                  <h6>Data de nascimento</h4>
                    <i class="material-icons">cake</i>
                    <input type="date" name="data" id="i5" class="input" placeholder="Data de nascimento"/><br><br>
                      <i class="material-icons">sentiment_very_satisfied</i>
                    <input type="text" name="nome" id="i6" class="input" placeholder="Nome Completo"/><br><br>
                                        <input type="text" name="cpf" id="i8" class="input" placeholder="CPF"/  pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
      title="Digite o CPF no formato nnn.nnn.nnn-nn"><br><br>

                    <input type="submit" id="i7" placeholder="Enviar"/>



                    </form> -->
<br>
                    <form method="post">

                      <h1>Cadastro</h1><br><br>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationServer01">Nome de usuário</label> <br>
             <span class="input-group-text" id="inputGroupPrepend3">Digite seu usuário</span>
        <input class="w3-input w3-animate-input" required name="username" id="i1" type="text" style="width:40%">
        <div class="valid-feedback">
          Tudo certo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServer02">Senha</label> <br>
          <span class="input-group-text" id="inputGroupPrepend3">Digite sua senha</span>
      <input class="w3-input w3-animate-input" id="i2"class="input" name="password" id="i1" type="password" style="width:40%" required>
        <div class="valid-feedback">
          Tudo certo!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServerUsername">Numero da casa </label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend3">ex: 45</span>
          </div>
            <input class="w3-input w3-animate-input" id="i2"class="input" name="ncasa" id="i4" type="number" style="width:40%" required>
          <div class="invalid-feedback">
            Por favor, digite o numero da sua casa
          </div>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationServer03">Bairro</label> <br>
        <span class="input-group-text" id="inputGroupPrepend3">ex: São Paulo</span>

        <input type="text" class="form-control is-invalid" id="validationServer03"  name="bairro" placeholder="Bairro" required>
        <div class="invalid-feedback">
          Por favor, informe uma cidade válida.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationServer04">Rua</label> <br>
                <span class="input-group-text" id="inputGroupPrepend3">ex: Piracicaba</span>
        <input type="text" class="form-control is-invalid" id="validationServer04"  name="rua" placeholder="Rua" required>
        <div class="invalid-feedback">
          Por favor, informe um estado válido.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationServer05">CEP</label><br>
          <span class="input-group-text" id="inputGroupPrepend3">ex: 11111-000</span>
        <input type="text" class="form-control is-invalid" id="validationServer05"  name="cep" placeholder="CEP" required>
        <div class="invalid-feedback">
          Por favor, informe um CEP válido.
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="1" name="termos" id="invalidCheck3" required>
        <label class="form-check-label" for="invalidCheck3">
          Concordo com os termos e condições
        </label>
        <div class="invalid-feedback">
          Você deve concordar, antes de continuar.
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
  </form>




        </div>


      <footer>
         Raphael Rodrigues & Lucas Mofardini
      </footer>
</html>

<style>

footer{
  background-color: rgb(183,12,40);
  color: white;
  margin-bottom:0px;
  text-align: center;
}
@media screen and (max-width: 800px) {
  footer{
    display: none;
  }
}
input{
  text-align: center;
}
body{
    margin:0 auto;

}
form{

    text-align:center;
    border:1px solid black;
    height:500px;
    width:1000px;

}
.input{
    /* height:20px;
    width:300px;
    font-family:calibri;
    border-radius: 3px;
      box-shadow: 0.5px 3px 2.5px black ; */


}
form{
  margin-top: 6vh;
box-shadow: 3px 6px 5px black ;
background-color:  #F0F8FF;
}

h1{
  background-color: #B2002A;
  padding-bottom: 10px;
  padding-top: 10px;
  color: white;
  margin-top: 3px;

  width: 100%;
}
i{
  position: absolute;
  margin-left: -28px;
}


</style>
<!-- Esse é o css do  menu -->
<style>

  body{
  margin: 0;
  background-color: #FFFAFA;
}
.corpo{
  margin: 0 auto;
  width: 75%;

}

header{
  width: 100%;
  height: 1200px;
  min-height: 300px;
  /*background-color: blue;*/
}
.menu_cabeça{
  color: white;
  transition: transform 0.3s linear 0.1s;

}
.menu_cabeça:hover{
  transform: scale(1.3);
  transition: 0.6s;


}
#img_pizza_logo{
  height: 9vh;
  float: left;
  min-width: 10%;
  min-height: 6vh;

}
#nome_logo{

  float: left;
  margin-top: 1.5vh;
  color: black;
  margin-left: 10px;
  font-size: 150%;
  padding: 3px;
  padding-left: 10px;
  padding-right:  10px;
  border: solid black 0.5px;

  box-shadow: 3px 6px 5px black ;


}

.imagem-pizza{
  margin-top: 15vh;
  width: 70%;
  min-height: 30%;
  border-radius: 5%;
  min-width: 90%;



}
header #pizza-pequena{
  width: 30%;
  margin-top: 1vh;



}
li{
  font-size: 14px;
}
.imagens-siameses{
  margin-top: 1vh;
  width: 44.9%;
  border-radius: 5%;
  padding:5px;
  height: 50vh;
    min-height: 30%;

}
div .navbar{
    box-shadow: 0px 2px 5px rgb(0,0,0);
}
.promocoes{
  width: 89%;
  height: 150px;
  background-color: black;
  margin-left: 8vh;
  border-radius: 10px;
}
.cardapio-corpo{
  margin-top: 15vh;
  width: 100%;
  height: 800px;
  /* background-color: pink; */

}
.pizza-cardapio{

  width: 100%;
  height: 8vh;

}
.pizza-cardapio p {
  font-size: 30px;
  color: white;
  padding: 4px;
  color: black;
  border: 1px solid gray;
  border-radius: 10px;
  transition: transform 0.3s linear 0.1s;


}
.pizza-cardapio p:hover {
  color: white;
  background-color: #B2002A;
  transition: 0.4s;
  box-shadow: 3px 6px 5px gray;
  transform: scale(1.01);


}
#pizza-icon-cardapio{
  width: 20vh;
}
@media screen and (max-width: 800px) {

    .imagens-siameses{
      margin-top: 1vh;
      width: 44.9%;
      border-radius: 15%;
      padding:3px;
      height: 15vh;

}
.corpo{
  width: 100%;
  /* Talvez eu deixe grande */
}
.imagens-siameses{
  height: 20vh;
}
div .navbar{
    box-shadow: 0px 1.5px 5px rgb(0,0,0);
}
.promocoes{
  width: 89%;
  height: 100px;
  background-color: black;
  margin-left:3vh;
  border-radius: 3%;
  display: none;
}
#pizza-icon-cardapio{
  width: 15vh;
}


</style>

<h99>
<?php
include_once('../Controller/CadastroPHP.php');

 ?>
</h99>
