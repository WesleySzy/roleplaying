<?php
include_once('_private/conectar.php');
include_once('_private/funcao.php');
$urlProjeto = 'http://localhost:8080/roleplaying/'; /* mudar o padrao pelo nome da pasta */
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$REQUEST_URI = $_SERVER['REQUEST_URI'];
$SCRIPT_FILENAME = $_SERVER['SCRIPT_FILENAME'];
/* echo 'root= '.$DOCUMENT_ROOT;
  echo 'REQUEST_URI= '.$REQUEST_URI;
  echo 'SCRIPT_FILENAME= '.$SCRIPT_FILENAME; */
//if(file_exists($DOCUMENT_ROOT.$REQUEST_URI)and ($SCRIPT_FILENAME!=$DOCUMENT_ROOT.$REQUEST_URI)and ($REQUEST_URI!="/")){
$paginaAtual =1;
if (file_exists($DOCUMENT_ROOT . $REQUEST_URI) and ($REQUEST_URI != "/")) {
    $url = $REQUEST_URI;
    //echo $url;
    if ($url == '/roleplaying/') { /* mudar o padrao pelo nome da pasta */
        $paginaAtual =1;
        include("login.php");
        exit();
    } else {
        $paginaAtual =1;
        include($DOCUMENT_ROOT . $url);
        exit();
    }
}
$url = strip_tags($REQUEST_URI);
$url_array = explode("/", $url);
array_shift($url_array); //o primeiro �ndice sempre ser� vazio
$mostrarArray = false;
if ($mostrarArray) {
    echo 'Array 0 :' . $url_array[0];
    echo '<br>';
    echo 'Array 1 :' . $url_array[1];
    echo '<br>';
    echo 'Array 2 :' . $url_array[2];
    echo '<br>';
    echo 'Array 3 :' . $url_array[3];
    echo '<br>';
    echo 'Array 4 :' . $url_array[4];
}
if (empty($url_array[1])) {
    $paginaAtual =1;
    include("home.php");
    exit();
} elseif ($url_array[1] == 'home') {
    $paginaAtual =1;
    include("home.php");
    exit();
} elseif ($url_array[1] == 'login') {
    $paginaAtual =1;
    include("login.php");
    exit();
} elseif ($url_array[1] == 'registrar') {
    $paginaAtual =1;
    include("registrar.php");
    exit();
}
exit();