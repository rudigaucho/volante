

<?php include "conn.php"; 


/*session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  
  
}*/

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ) &&  ($_SESSION["acesso"] != 'TEC' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>



<!DOCTYPE html>



<html lang="pt-br">
<head>

<script type="text/javascript" src="jquery.min.js"></script>


<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=ddd]").change(function(){
            $("select[name=estacao]").html('<option value="0">Carregando...</option>');
             
            $.post("localidades.php",
                  {ddd:$(this).val()},
                  function(valor){
                     $("select[name=estacao]").html(valor);
                  }
                  )
             
         })



       </script>







 <style>

 .none{
    display:none;
}



label.error {
    color: red;
    font-size: 10px;
    font-family: arial;      
}


     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="logo.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

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
  <title>CADASTRO</title>
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

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="logout.php">Logout</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>CADASTRO DE ATIVIDADE</strong></span><br><br><br><br>

<div class="container">





<div class="row content">


    <div class="col-sm-10 ">

      <table class="table table-bordered" id="tb1" name="tb1">

    <thead>
      <tr>
        
        
        
       
      


      </tr>
    </thead>
    <tbody> 
      <tr>
        <td> SERVIÇOS DE REDE EXTERNA</td>
       
        
        
        
      </tr>
      <tr>
        <td>SUBSTITUIÇÃO DE REDE DE CABOS</td>
         
     
    
      </tr>
      <tr>
         <td>DOCUMENTO DE DANOS A REDE EXTERNA</td>
      
       
       
     
      </tr>
      
    </tbody>




    
  </table>

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar.php " >

   

    
   
  




    <br><br>


      
<?php $codigo = (mt_rand(1,101020000) ) ; ?>


   
 
    <table class="table table-bordered" id="tb1" name="tb1">
    <span><strong>CÓDIGO DN: <?php echo $codigo; ?></strong></span><br><br>
    <thead>
      <tr>
        
        
        
       
      


      </tr>
    </thead>
    <tbody> 
      <tr>
        
        <td> BA / MASSIVO <input type="text" class="form-control" id="ba" name="ba"   required ></td>
        <td> PROTOCOLO <input type="text" class="form-control" id="protocolo" name="protocolo"   required ></td>
        <input type="hidden" class="form-control" id="codigo" name="codigo"  value="<?php echo $codigo; ?>" required >
        
        
      </tr>
      <tr>
        <td>ESTADO

        <select name="estado" class="form-control">
            
            <option value="PR"> PR</option>
            <option value="SC"> SC</option>

      
        </select></td>
         <td> LOCALIDADE <input type="text" class="form-control" id="localidade" name="localidade"   required ></td>
        <td> ESTACAO <input type="text" class="form-control" id="estacao" name="estacao"   required ></td>
     
    
      </tr>
      <tr>
         <td>ARD <input type="text" class="form-control" id="ard" name="ard"   required ></td>
        <td> ENDERECO <input type="text" class="form-control" id="endereco" name="endereco"   required ></td>
        <td> </td>

       
       
     
      </tr>
      
    </tbody>




    
  </table>

  <div class="form-group">

<label for="email">TIPO DE DANO: </label><br>

        <select name="tipo" class="form-control">
            <option value="PREVENTIVA">PREVENTIVA</option>
            <option value="FURTO">FURTO</option>
            <option value="CABO ROMP. VEIC. CARG. ALTA">CABO ROMP. VEIC. CARG. ALTA</option>
            <option value="ARMA DE FOGO">ARMA DE FOGO</option>
            <option value="CABO ROMPIDO POR TROCA DE POSTE">CABO ROMPIDO POR TROCA DE POSTE</option>
            <option value="DESCARGA ELÉTRICA ATMOSFÉRICA">DESCARGA ELÉTRICA ATMOSFÉRICA</option>
            <option value="CABO QUEIMADO POR VANDALISMO">CABO QUEIMADO POR VANDALISMO</option>
            <option value="CABO ROMPIDO SEGUIDO DE FURTO"> CABO ROMPIDO SEGUIDO DE FURTO</option>
            <option value="VANDALISMO"> VANDALISMO</option>
            <option value="CABO BAIXO"> CABO BAIXO</option>

      
        </select>

      </div>




  




<fieldset style="border: 1px solid black; padding: 8px; "> 
<span><strong>MATERIAIS USADOS.:</strong></span><br><br>
 


<div class="wrapper">
    <div class="toclone">
          <select name="list[qtd][]">
            <option value="0">Escolha uma material</option>
        <?php
     
          
         $sql = "SELECT * FROM material ORDER BY descricao ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['cod'].'">'.$ln['cod'].'+++'.$ln['descricao'].'</option>';

            $descricao = $ln['descricao'];
         }
      ?>
        </select>
       <input  type="text" name="produtos[qtd][1]">
        <button type="button" class="add" >+</button>
        <button type="button" class="remove" >-</button>
    </div>        
</div>

 <input type="hidden" class="form-control" id="descricao" name="descricao"  value="<?php echo $descricao; ?>" required >

<script type="text/javascript">
function adicionar(){
  var ElementoClonado = $(this.parentNode).clone(); //clona o elemento
  var str = $(ElementoClonado).children('input').eq(0).attr('name').split("["); //divide o name por "["
  console.log(str);
  var intQtd = parseInt(str[2].split("]")[0]); //resgata o numero entre "[" e "]"
  console.log(intQtd);
  var newName = "produtos[qtd]["+(intQtd+1)+"]"; //novo valor name somado +1 do original
  ElementoClonado.children('input').eq(0).attr('name', newName); //seta o novo name para o elemento clonado
  $('.wrapper').append(ElementoClonado);
  $('.add').on("click", adicionar);
  $('.remove').on("click", remover);
  $(this).unbind("click");
}
function remover(){
  $(this.parentNode).remove();
}
$('.add').on("click", adicionar);
$('.remove').on("click", remover);

</script>
   

</fieldset>  
<br><br>

    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar"  > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>

</body>
</html>



<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->