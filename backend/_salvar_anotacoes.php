<?php
session_start();
include 'include/conexao.php';
include 'include/function.php';
$login = $_SESSION['loginUser'];

try{

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categorias'];
    $anotacoes = $_POST['anotacoes'];
    $descricao = $_POST['descricao'];

    validaCampoVazio($titulo,'titulo');

    if($anotacoes == ""){
        $retorno = array('retorno'=>'erro','mensagem'=>'Escreva alguma anotaço!');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json; 
        exit;
    }

    if($categoria == 0){
        $retorno = array('retorno'=>'erro','mensagem'=>'Escolha uma categoria!');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json; 
        exit;
    }

    $sql = "INSERT INTO tb_anotacoes(`titulo`, `anotacao`, `descricao`, `id_categorias`,`login_email`) VALUES('$titulo', '$anotacoes', '$descricao', '$categoria', '$login')";
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