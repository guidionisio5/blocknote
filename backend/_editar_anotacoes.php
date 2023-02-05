<?php 
session_start();
include 'include/conexao.php';
include 'include/function.php';
$login = $_SESSION['loginUser'];
try{

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categorias'];
    $anotacao = $_POST['anotacoes'];
    $descricao = $_POST['descricao'];
    $id = $_POST['id'];
    
    validaCampoVazio($titulo,'titulo');

    if($anotacao == ""){
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

    $sql = "UPDATE tb_anotacoes SET titulo = '$titulo', id_categorias = '$categoria', anotacao = '$anotacao', descricao = '$descricao' WHERE id = '$id' AND login_email = '$login'";
    $comando = $con->prepare($sql);
    $comando->execute();

    $retorno = array('retorno'=>'ok','mensagem'=>'Atualizado com sucesso!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    echo $json;

}catch(PDOException $erro){

    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;

}

$con = null;
?>