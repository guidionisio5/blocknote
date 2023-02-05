<?php
session_start();
include 'include/conexao.php';
include 'include/function.php';
$login = $_SESSION['loginUser'];
try{

    $categorias = $_POST['categorias'];

    validaCampoVazio($categorias,'categorias');

    $sql = "INSERT INTO tb_categorias(`categorias`, `login_email`) VALUES('$categorias', '$login')";
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