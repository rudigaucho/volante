<?php

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ) )
{
  header("Location: index.html");
  exit;
  
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo_oi.png">
	
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <title>Sistema Saldo Volante</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 
 
 body
 {
	 
     background: url(empresa.jpg) no-repeat;
	 
 }

 
  #teste{background:white;padding:5%; border: solid 2px black;margin-top: 14%; }
  
  
    .btn
    {

      background: purple;
    }
    .btn:hover
    {

      background: orange;
      color:black;
    }
  </style>
</head>
<body>



<div class="container text-center">
  <div class="row content">
   
    <div class="col-sm-3 text-center col-md-offset-4" id="teste" >
	<label for="email"  >Sistema Saldo Volante</label><br>
   <div class="btn-group btn-group-vertical ">
      <a href="cadastro.php" class="btn btn-info btn-lg" role="button">Cadastro</a>
      <a href="pesq_per.php" class="btn btn-info btn-lg" role="button">Pesquisa período</a>
     <a href="pesq_prot.php" class="btn btn-info btn-lg" role="button">Pesquisa protocolo</a>
     <a href="cad_usu.php" class="btn btn-info btn-lg" role="button">Cadastro usuário</a>
     <a href="arquivo.php" class="btn btn-info btn-lg" role="button">Arquivo</a>
         <!-- <a data-toggle="modal" class="btn btn-info btn-lg"  href="#justificativa">Atualização sistema</a>  -->
     
     

 
  
     
   
  
    </div>
   </div>
</div>
 <footer class="container-fluid " style="color:white; ">
  <p style="margin-right: 9%;">Sistema desenvolvido por Rudinei Rossales  </p>
</footer>

 <div id="justificativa" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>LOGIN:</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">

       <form class="form" role="form" name="seachform" method="post" action="autenticacao.php " enctype="multipart/form-data" >

 <div class="form-group">

       <label for="email">Login:</label>
      <input type="text" class="form-control" id="login" name="login"    required>
    </div><br>

        <div class="form-group">
    <label for="email">Senha: </label>
  <input type="password" class="form-control" id="senha" name="senha"    required>
    </div>

    <div class="form-group">
  

<button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Logar</strong> </button>


    </form>
















    </div>
    </div>
    </div>
    </div>
    </div>



</body>
</html>

