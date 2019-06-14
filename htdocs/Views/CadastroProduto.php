<?php
include_once('../Controller/CadastroProdutoPHP.php');

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<form method="get" id="f1" action="../Controller/CadastroProdutoPHP.php?">
     <b>Cadastre o(a) <?php
     $cons = mysqli_query($mysqli,"SELECT Nomee from Categoria where CategoriaID=$tipo;");

     while ($imp = mysqli_fetch_array($cons)) {


       echo " ".$imp['Nomee'];} ?>  </b>
     <br>
   <input type="text"  name="nome" placeholder="Nome">

   <!-- Pelo amor de Deus não mexe nesse placeholder é gambiarra -->
   <input type="text" name="p"  readonly placeholder="<?php
   $cons = mysqli_query($mysqli,"SELECT Nomee from Categoria where CategoriaID=$tipo;");

   while ($imp = mysqli_fetch_array($cons)) {


     echo $imp['Nomee'];}?>">
   <input type="text" name="pre" placeholder="Preço">
      <input type="text" name="img" placeholder="Link da imagem">

   <button type="submit" name="cat" value = "<?php echo "$tipo" ?>" class='btn btn-dark' placeholder="enviar">Cadastrar</button>
   </form>
