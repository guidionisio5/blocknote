<?php 
session_start();
session_unset();
session_destroy();

$retorno = array('retorno'=>'ok','mensagem'=>'Deslogado com sucesso!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;
    header('location:../index.html');
    exit;

?>