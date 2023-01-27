<?php

include 'include/conexao.php';
include 'include/function.php';

try{

    $categorias = $_POST['categorias'];

    validaCampoVazio($categorias,'categorias');

    $sql = "INSERT INTO tb_categorias(`categorias`) VALUES('$categorias')";
    $comando = $con->prepare($sql);
    $comando->execute();

    $retorno = array('retorno'=>'ok','mensagem'=>'Categoria salva com sucesso!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    echo $json;

}catch(PDOException $erro){

    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;

}

$con = null;

?>