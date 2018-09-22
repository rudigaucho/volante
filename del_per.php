<?php
include "conn.php";


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
<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='index.html'",3000);
  
  
}
</script>
<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='pesq_per.php'",3000);
  
  
}
</script>

<link rel="icon" href="img/logo_oi.png">
	

  <title>Delete material.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 #painel
 {

margin-top: 10%;

 }
 


 
  #teste{background:white;padding:5%; border: solid 2px black;margin-top: 14%; }
  
  
    .btn
    {

      background: green;
    }
    .btn:hover
    {

      background: #7BEB1C;
      color:black;
    }
  </style>
</head>
<body>



<div class="container ">
<?php


$data =$_GET['data'];
$data2 =$_GET['data2'];


$query = "update   mat_aplicado SET visu = 'A' where   dat  BETWEEN   '$data' and '$data2'";


$sql = mysql_query($query);
if($sql )
{
  
  echo "<h2>Excluído com sucesso!</h2>";
  echo "<script>saidasuccessfully()</script>";
  
}
else
{
  
  echo "Erro !";
  
}
?>



</div>




</body>
</html>

