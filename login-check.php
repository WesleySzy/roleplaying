<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
include_once('./_private/conectar.php');
include_once('./_private/funcao.php');
foreach ($_POST as $campo => $valor) {
    $$campo = anti_injection($valor);
}
$query = mysqli_query($conexao, "SELECT * FROM usuario where user_email = '$email' and user_senha = '$password'"); // Check the table with posted credentials
    $num_rows = mysqli_num_rows($query); // Get the number of rows
    if ($num_rows <= 0) {
        echo 'erro'; // If no uss exist with posted credentials print 0 like below.
    } else {
        $fetch = mysqli_fetch_array($query);
        $_SESSION['session_ativa'] = true;
        $_SESSION['session_usuario'] = $fetch['user_name'];
        echo 'sucesso';
    }
?>