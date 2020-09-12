<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();

include_once('../_private/conectar.php');
include_once('../_private/funcao.php');
foreach ($_POST as $campo => $valor) {
    $$campo = $valor;
    // echo $campo . " - " . $valor . "<br>";
}

//gravar no banco

$query_alt = mysqli_query($conexao, "INSERT INTO usuario(user_id, user_name, user_email, user_senha) VALUES (null,'$nome','$email','$senha')") or die("Erro ao selecionar 2" . mysqli_error());
if ($query_alt) {
    $sql_par = mysqli_query($conexao, "SELECT * from usuario ORDER BY user_id DESC limit 1") or die(mysqli_error() . 'oi');
    while ($l_par = mysqli_fetch_array($sql_par)) {
		$par_insert = $l_par['user_id'];
    }
        echo "<script> alert('Cadastro efetuado com sucesso!') </script>";
        print "<script>window.location='../login'</script>";
}
?>