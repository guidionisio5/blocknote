<?php

include 'include/conexao.php';
include 'include/function.php';

try{

    $anotacoes = $_POST['anotacoes'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];

    // validaCampoVazio($nome,'nome');

    $sql = "INSERT INTO tb_anotacoes(`anotacoes`, `descricao`, `id_categorias`) VALUES('$anotacoes', '$descricao', '$categoria')";
    $comando = $con->prepare($sql);
    $comando->execute();

    $retorno = array('retorno'=>'ok','mensagem'=>'Anotações salva com sucesso!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    echo $json;

}catch(PDOException $erro){

    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;

}

$con = null;

?>