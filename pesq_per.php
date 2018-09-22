<?php  include "conn.php";  ?>




<?php 

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
<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='epi.php'",3000);
  
  
}



</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="logo.png">






<title>Controle</title>
  <link rel="icon" href="img/key.png">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  
   
   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


  <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
</head>
<body>
<div class="jumbotron text-center " id="jumbo">
   <br><br><br><br><br><br><br>
</div>
<p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!--   <a class="navbar-brand" href="#"> <?php // echo $_SESSION["nome"]?></a> -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
            <li class="active"><a href="#" style="float: left;" id="test" onClick="javascript:fnExcelReport();"  >Gerar excel</a></li>      
         <li class="active"><a href="ger.php">Voltar</a></li>
         <li class="active"><a href="logout.php">Logout</a></li>
          
     

                </ul>
            </div>

        </div>
    </div>
 <form class="form-inline" role="form"   method="POST" action="pesq_per.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso">
  
  <div class="row">
   <label  for="data">
      Período
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DE" type="text" required/>
        <input class="form-control" id="date2" name="date2" placeholder="ATÉ" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="bootstrap-datepicker.min.js"/>

<script type="text/javascript" src="bootstrap-datepicker.min.js"></script>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>

    
    <button type="submit"   name="submit" id="submit" class="btn btn-default">Busca</button> <br>
  </form>



<div class="container-fluid">


<div class="row"> <!-- 6 + 6 = 12 -->
   <div class="table-responsive col-sm-12">
  <table class="table table-hover" id="myTable">

    <thead>
      <tr >
        <th>DN</th>
       <th>COD</th>
       <th>DESCRICAO</th>
     
      <th>QUANTIDADE</th>
           <th>PROTOCOLO</th>
                <th>BA</th>
                     <th>ESTADO</th>
        <th>LOCALIDADE</th>
        <th>ESTACÃO</th>
        <th>ARD</th>
        
        <th>ENDEREÇO</th>
        <th>DANO</th>
        <th>DATA</th>
                <th>ID</th>
                
                    
                
      
   
    
      
       
      </tr>
    </thead>
  
  <?php


  if (isset($_POST ['submit']) )
{


$data = $_POST['date'];
$data2 = $_POST['date2'];



$sql = mysql_query (" select * from mat_aplicado as A join principal as B on a.cod_mat = b.cod where dat BETWEEN   '$data' and '$data2' and visu = 'P' " );







  while ($dado = mysql_fetch_assoc($sql )){

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>


     <tr style="color:red">




      <tr class="">

    <td> <?php echo $dado ["cod_mat"];  ?></td> 
  <td> <?php echo $dado ["complemento"];  ?></td>    
<td> <?php echo $dado ["descricao"];  ?></td>

<td> <?php echo $dado ["qtd"];  ?></td>


  

<td> <?php echo $dado ["protocolo"];  ?></td>
<td> <?php echo $dado ["ba"];  ?></td>
<td> <?php echo $dado ["estado"];  ?></td>
 <td> <?php echo $dado ["localidade"];  ?></td>

  <td> <?php echo $dado ["estacao"];  ?></td>
   <td> <?php echo $dado ["ard"];  ?></td>
     <td> <?php echo strtoupper($dado ["endereco"]);  ?></td>
  <td> <?php echo $dado ["dano"];  ?></td>
  <td> <?php echo strtoupper($dado ["data"]);  ?></td>
    <td> <?php echo $dado ["id_usu"];  ?></td>


 


    <?php $cod = $dado ["cod"];  ?>


  

<!-- <td> <a href="form.php?cod=<?php//  echo $cod ?>" target="_BLANK"> RELATORIO</a> </td> -->







 






<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');

         setTimeout("window.location='del_per.php?data=<?php  echo $data ?>&&data2=<?php  echo $data2 ?>'",1000);

  
    }

}





</script>





  








<?php }   ?>




<?php }   ?>










</div>




         </div>
         </table>

         

    </div>


    <?php

    


 

?>


  

</body>




</html>


