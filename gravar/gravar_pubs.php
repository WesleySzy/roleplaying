<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();

include_once('../_private/conectar.php');
require_once('RDSImage.php');
include_once('../_private/funcao.php');
foreach ($_POST as $campo => $valor) {
    $$campo = $valor;
    echo $campo . " - " . $valor . "<br>";
}

$imagem = $_FILES['file-upload'];

$feed_date = date("Y-m-d H:i:s");

//gravar no banco

$query_alt = mysqli_query($conexao, "INSERT INTO feed(feed_id, feed_message, feed_date, user_id) VALUES (null,'$feed_message','$feed_date','1')") or die("Erro ao selecionar 2" . mysqli_error());
if ($query_alt) {
    $sql_par = mysqli_query($conexao, "SELECT * from feed ORDER BY feed_id DESC limit 1") or die(mysqli_error() . 'oi');
    while ($l_par = mysqli_fetch_array($sql_par)) {
		$par_insert = $l_par['feed_id'];
		
		if($imagem != '') {
            $nomeFinal = time().'.jpg';
            if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
                $tamanhoImg = filesize($nomeFinal);
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
                mysqli_query($conexao,"INSERT INTO imagem(image_id, image_blob, feed_id) VALUES (null,'$mysqlImg','$par_insert')") or
                die(mysqli_error());
                unlink($nomeFinal); 
            }
		}
		
    }
    
}
?>