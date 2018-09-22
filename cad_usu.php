<?php include "conn.php"; 



session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ) )
{
  header("Location: index.html");
  exit;
  
  
}


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">







<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>CADASTRO USUÁRIOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
           
      

        
      <li class="active"><a href="ger.php">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container">
 <span><strong>USUÁRIOS</strong></span>
  <ul class="nav nav-tabs">
    
    <li class="active"> <a href="cad_usu.php">CADASTRO</a></li>

 


  </ul>
  <br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_cad_usu.php "  >

   

    <div class="form-group">

       <label for="email">ID:</label>
      <input type="text" class="form-control" id="id" name="id"   required >
    </div>
     <div class="form-group">




      <label for="email">NOME:</label>  
      <input type="text" class="form-control" id="nome" name="nome"  required>
    </div>
     <div class="form-group">

       <label for="email">LOGIN:</label>
      <input type="text" class="form-control" id="login" name="login"   required >
    </div>
 <div class="form-group">

       <label for="email">SENHA:</label>
      <input type="text" class="form-control" id="senha" name="senha"   required >
    </div>
     <div class="form-group">

       <label for="email">ID GA:</label>
      <input type="text" class="form-control" id="id_ga" name="id_ga"   required >
    </div>
     <div class="form-group">

       <label for="email">NOME GA:</label>
      <input type="text" class="form-control" id="nome_ga" name="nome_ga"   required >
    </div>
    <label for="sel1">ACESSO:</label>
  <select class="form-control " id="acesso" name="acesso"  >


    <option value="TEC">  TÉCNICO </option>
<option value="GER" > GERÊNCIA  </option>


  </select>
  

    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Cadastrar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

