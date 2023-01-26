<?php

include 'include/conexao.php';
include 'include/function.php';

try{

    $titulo = $_POST['titulo'];
    $data_lembrete = $_POST['data-lembrete'];
    $tempo = $_POST['horario'];

    validaCampoVazio($titulo,'titulo');
    validaCampoVazio($data_lembrete,'data-lembrete');
    validaCampoVazio($tempo,'horario');

    $sql = "INSERT INTO tb_lembretes(`titulo`,`data_lembrete`,`tempo`) VALUES('$titulo','$data_lembrete','$tempo')";
    $comando = $con->prepare($sql);
    $comando->execute();

    $retorno = array('retorno'=>'ok','mensagem'=>'Lembrete salvo com sucesso!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    echo $json;

}catch(PDOException $erro){

    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;

}

$con = null;

?>