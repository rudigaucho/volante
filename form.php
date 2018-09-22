<?PHP  

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ) &&  ($_SESSION["acesso"] != 'AUX' ))
{
  header("Location: index.html");
  exit;
  
  
}

?>

<!DOCTYPE html>



<html lang="pt-br">
<head>

 <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="logo.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>CADASTRO </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>
<body>


<?php 

 include "conn.php";




$cod =$_GET['cod'];

$sql = mysql_query ("select * from principal where cod = '$cod' " );







  while ($dado = mysql_fetch_assoc($sql )){

$cod =$dado['cod'];
$ba =$dado['ba'];
$protocolo =$dado['protocolo'];
$localidade =$dado['localidade'];
$estacao =$dado['estacao'];

$ard =$dado['ard'];

$endereco =$dado['endereco'];
$dano =$dado['dano'];
$data =$dado['data'];
$id_usu =$dado['id_usu'];



  }





 






 








?>

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
   
        
       


 
      
 
    
      
          <li class="active"><a href="ger.php">Voltar</a></li>
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>


<div class="container">


<div class="row content">


    <div class="col-sm-10 ">





    <div class="panel-primary class">
  <div class="panel-heading">RELATÓRIO</div>
  <div class="panel-body">
    
<label for="">CÓDIGO:  <label for=""><?php echo $cod; ?></label><br>
<label for="">BA:  <label for=""><?php echo $ba; ?></label><br>
<label for="">PROTOCOLO:  <label for=""><?php echo $protocolo; ?></label><br>
<label for="">LOCALIDADE:  <label for=""><?php echo $localidade; ?></label><br>
<label for="">ESTAÇÃO:  <label for=""><?php echo $estacao; ?></label><br>
<label for="">ARD:  <label for=""><?php echo $ard; ?></label><br>
<label for="">ENDEREÇO:  <label for=""><?php echo $endereco; ?></label><br>
<label for="">DANO:  <label for=""><?php echo $dano; ?></label><br>
<label for="">DATA:  <label for=""><?php echo $data; ?></label><br>
<label for="">ID:  <label for=""><?php echo $id_usu; ?></label><br>

</fieldset>

<br><br><br>

  
  <table class="table table-hover">

    <thead>
      <tr >
       <th>MATERIAL</th>
       <th>QUANTIDADE</th>
      
      
   
    
      
       
      </tr>
    </thead>
  
  <?php


 



$sql = mysql_query ("select * from mat_aplicado where cod = '$cod' " );







  while ($dado = mysql_fetch_assoc($sql )){

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>


     <tr style="color:red">




      <tr class="sucess">

   
  <td> <?php echo $dado ["descricao"];  ?></td>    
<td> <?php echo $dado ["qtd"];  ?></td>













  








<?php }   ?>



















         </div>
         </table>



 <?php echo "<img src='fotos/$foto_antes' class='img-rounded' alt='' width='300' height='300'>" ?>
   <?php echo "<img src='fotos/$foto_depois' class='img-rounded' alt='' width='300' height='300'>" ?> 
<?php echo "<img src='fotos/$croqui' class='img-rounded' alt='' width='300' height='300'>" ?> 



















  </div>
</div>

    

 </div>




</body>
</html>



