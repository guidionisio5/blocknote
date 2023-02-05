<?php 
session_start();
include 'include/conexao.php';
$login = $_SESSION['loginUser'];

try{

    $titulo = $_POST['titulo'];
    $data_lembrete = $_POST['data-lembrete-modal'];
    $tempo = $_POST['tempo'];
    $id = $_POST['id'];
    
    $sql = "UPDATE tb_lembretes SET titulo = '$titulo', data_lembrete = '$data_lembrete', tempo = '$tempo' WHERE id = '$id' AND login_email = '$login'";
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