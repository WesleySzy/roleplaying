<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
$bd_host = "localhost";

$bd_nome = "sql_sitebase";

$bd_user = "root";

$bd_senha = "";

$conexao = mysqli_connect($bd_host, $bd_user, $bd_senha, $bd_nome) or die(mysqli_error());
?>
