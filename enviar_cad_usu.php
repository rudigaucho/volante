



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_mat.php'",7000);
	
	
}


</script> 

<?php

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ) )
{
  header("Location: index.html");
  exit;
  
  
}



include "conn.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='ger.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO USUARIOS</title>


</head>



<body>








<?php

$id =$_POST['id'];
$login =$_POST['login'];
$senha =$_POST['senha'];
$id_ga =$_POST['id_ga'];
$nome =$_POST['nome'];
$nome_ga =$_POST['nome_ga'];
$acesso =$_POST['acesso'];


$sql = mysql_query ("select * from usuario where id = '$id'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "USUARIOL JÁ CADASTRADO VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into usuario (id,login,senha,nome,acesso,id_ga,nome_ga)";

$query.= "values ('$id','$login','$senha','$nome','$acesso','$id_ga','$nome_ga')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo '  <h2>CADASTRADO COM SUCESSO!<br>';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}



?>

























</body>


</html>