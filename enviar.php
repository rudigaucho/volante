
<?php
include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
  
  
session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ) &&  ($_SESSION["acesso"] != 'TEC' ))
{
  header("Location: index.html");
  exit;
  
  
}

  
  
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

<title>SISTEMA SALDO VOLANTE</title>

<link rel="icon" href="apa.jpg">
</head>



<body>








<?php

$codigo =$_POST['codigo'];

$ba =$_POST['ba'];
$protocolo =$_POST['protocolo'];
$estado =$_POST['estado'];
$localidade =$_POST['localidade'];
$estacao =$_POST['estacao'];
$ard =$_POST['ard'];
$endereco =$_POST['endereco'];
$id =$_POST['id'];
$tipo =$_POST['tipo'];







$sql = mysql_query ("select * from usuario where id = '".$_SESSION['id']."' " );


$row = mysql_num_rows($sql);
 if  ($row == 0 )
{


echo "<span>Usuário não cadastrado no sistema <br> Verifique seu ID!</span>";
   
  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=cadastro.php">';

  
}



$query2 = "insert into auxiliar (cod,ba,protocolo,estado,localidade,estacao,ard,endereco,dano,data,id_usu)";

$query2.= "values ('$codigo','$ba','$protocolo','$estado','$localidade','$estacao','$ard','$endereco','$tipo',NOW(),'".$_SESSION['id']."')";




$sql2 = mysql_query($query2);


$query = "insert into principal (cod,ba,protocolo,estado,localidade,estacao,ard,endereco,dano,data,id_usu)";

$query.= "values ('$codigo','$ba','$protocolo','$estado','$localidade','$estacao','$ard','$endereco','$tipo',NOW(),'".$_SESSION['id']."')";




$sql = mysql_query($query);





if($sql )
{
  
  
    echo ' <h2>ENVIADA COM SUCESSO!';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}








$values_gender = $_POST["produtos"]['qtd'];
$values_gender2 = $_POST["list"]['qtd'];

$descricao =$_POST['descricao'];























  





                  
                   foreach ($values_gender as $values){

                     $string[] =  $values;

                  }

$i = 0;

                foreach ($values_gender2 as $values2){

                    //echo $values; echo '<br>';

                 
             

                    $query1 = "insert into mat_aplicado (cod_mat,descricao,complemento,qtd,dat,visu)";

                    $query1.= "values ('$codigo','$descricao','$values2','$string[$i]',NOW(),'P')";

                    ++$i;

$sql1 = mysql_query($query1);

                 }  








?>

























</body>


</html>