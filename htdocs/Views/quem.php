<?php
include_once('../Views/cabecalho.php');
session_start();
include_once('../Controller/config.php');

?>
<html>
<head>
	<title>Quem somos</title>
  <center>
    <h1 class="titulo">Quem somos</h1>
  </center>
</head>
<body>
      <div class="div-raphael">
        <center>

        <h2 id="nome-raphael">Raphael Barbosa Rodrigues</h2>

      </center>
        <img id="img-raphael" class="fotos-criadores col-7" src="https://avatars3.githubusercontent.com/u/42044496?s=400&v=4" alt="Raphael">

				<center>

						<p class="texto-rapha">Olá,meu nome é Raphael Barbosa Rodrigues e estou cursando o 3º ano do ensino médio , <br>
							integrado a t.i, não possuo experiência profissional relacionada a t.i, <br>
							contudo já desenvolvi diversos projetos na área, faço curso de inglês a quase três anos e <br>
							 me considero em um nível entre intermediário e avançado no idioma.</p>
				</center>
      </div>
				<div class="arrumar">

				</div>
			<div class="div-raphael">
				<center>

				<h2 id="nome-raphael">Lucas Gabriel M. de Almeida</h2>

			</center>
				<img id="img-raphael" class="fotos-criadores "width="400px" src="https://pbs.twimg.com/profile_images/618982505388056576/8-ZCX5pc_400x400.jpg" alt="Raphael">

				<center>

						<p class="texto-rapha">Olá,meu nome é Raphael Barbosa Rodrigues e estou cursando o 3º ano do ensino médio , <br>
							integrado a t.i, não possuo experiência profissional relacionada a t.i, <br>
							contudo já desenvolvi diversos projetos na área, faço curso de inglês a quase três anos e <br>
							 me considero em um nível entre intermediário e avançado no idioma.</p>
				</center>
			</div>

			<!-- <div class="div-lucas">
				<center>

				<h2 id="nome-lucas">Lucas G. M. de Almeida</h2>

			</center>
				<img width="400px" class="fotos-criadores" src="https://pbs.twimg.com/profile_images/618982505388056576/8-ZCX5pc_400x400.jpg" alt="Raphael">
				<center>
					<br><br><br>
					<br><br><br><br><br>
						<p class="texto-lucas">Olá,meu nome é Raphael Barbosa Rodrigues e estou cursando o 3º ano do ensino médio , <br>
							integrado a t.i, não possuo experiência profissional relacionada a t.i, <br>
							contudo já desenvolvi diversos projetos na área, faço curso de inglês a quase três anos e <br>
							 me considero em um nível entre intermediário e avançado no idioma.</p>

				</center>
			</div> -->

</body>
</html>
<style>
@font-face {
src: url(fontes/beloved.otf);
font-family: beloved;
}
	h1{
		background-color: rgb(183,13,41);
		color: white;
		padding-top: 0.5em;
		padding-bottom: 0.5em;
		font-family:  beloved;

	}
	h1:hover{
		transform: scale(1.02);
		transition: 0.6s;
	}
h1{
			transition: transform 0.3s linear 0.1s;
}
.fotos-criadores{
  border-radius: 5%;
  border: solid 1.3px rgb(183,13,41);
}
img{

}
.arrumar{
	margin-top: 35em;
}
#img-raphael{
  float:right;
	transition: transform 0.3s linear 0.1s;

}
#img-raphael:hover{
	transform: scale(1.02);
	transition: 0.6s;
}
#nome-raphael{
  float:left;
  position: relative;
	margin-left: 2.5em;
	font-family: beloved;
	font-size: 2.8em;
}
.texto-rapha{
	float: left;
	font-family: beloved;
	font-size: 1.1em;
	text-align: center;
	position: relative;
	margin-top: 5em;
}
.texto-lucas{
	float: right;
	font-family: beloved;
	font-size: 1.1em;
	text-align: center;
	position: relative;
	margin-top: -25em;
}
.div-lucas{
	position: relative;
	margin-top: 12em;
}
#nome-lucas{
	float:right;
	position: relative;
	margin-left:12em;
	font-family: beloved;
	font-size: 2.8em;
}
.div-raphael{
	position: relative;
	top: 4vh;
}
@media screen and (max-width: 800px){
	.titulo{
width: 100%;
	}
}
</style>
