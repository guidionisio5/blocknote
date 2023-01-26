<?php

include 'include/conexao.php';
include 'include/function.php';

try{

    // $titulo = $_POST['titulo'];
    $anotacoes = $_POST['anotacoes'];
    $descricao = $_POST['descricao'];
    // $categoria = $_POST['categorias'];

    // validaCampoVazio($titulo,'titulo');
    validaCampoVazio($anotacoes,'anotacoes');
    // validaCampoVazio($categoria,'categorias');

    $sql = "INSERT INTO tb_anotacoes( `anotacao`, `descricao`) VALUES('$anotacoes', '$descricao')";
    $comando = $con->prepare($sql);
    $comando->execute();

    $retorno = array('retorno'=>'ok','mensagem'=>'Anotação salva com sucesso!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    echo $json;

}catch(PDOException $erro){

    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;

}

$con = null;

?>