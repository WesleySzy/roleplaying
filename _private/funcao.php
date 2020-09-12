<?php

/**
 * @param $NumeroDecimal
 * @return string
 */
function NumeroDecimal($NumeroDecimal)
{
    return number_format((float)$NumeroDecimal, 2, ',', '.');
}
function NumeroDecimalGestores($NumeroDecimal){
    return number_format((float)$NumeroDecimal, 2,',','.');
}
function data_br($data){
    return date("d/m/Y H:i", strtotime($data));
}
function anti_injection($sql) {
    $sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/", "", $sql);
    $sql = trim($sql);
    $sql = strip_tags($sql);
    $sql = (get_magic_quotes_gpc()) ? $sql : addslashes($sql);
    return $sql;
}
function mes($mes) {

    switch ($mes) {
        case "01":    $mes = Janeiro;     break;
        case "02":    $mes = Fevereiro;   break;
        case "03":    $mes = Março;       break;
        case "04":    $mes = Abril;       break;
        case "05":    $mes = Maio;        break;
        case "06":    $mes = Junho;       break;
        case "07":    $mes = Julho;       break;
        case "08":    $mes = Agosto;      break;
        case "09":    $mes = Setembro;    break;
        case "10":    $mes = Outubro;     break;
        case "11":    $mes = Novembro;    break;
        case "12":    $mes = Dezembro;    break;
    }

    echo $mes;


}

function moeda($moeda) {
    $sql = preg_replace("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/", "", $sql);
    $sql = trim($sql);
    $sql = strip_tags($sql);
    $sql = (get_magic_quotes_gpc()) ? $sql : addslashes($sql);
    return $sql;
}

function enviar_imagem($caminho, $imagem) {

    $numero = rand(1, 1000);
    $nome_imagem = $numero . "_" . basename($imagem['name']);
    $nome_imagem = strtr($nome_imagem, "ªº°´~[]/;:?}^{`+_)(*&¨%$#@!àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ", "---------------------------aaaaaaaceeeeiiiinoooooouuuyyy");
    $uploadfile = $caminho . "/" . $nome_imagem;
    move_uploaded_file($imagem['tmp_name'], $uploadfile);

    return $nome_imagem;
}
?>