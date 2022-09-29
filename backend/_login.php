<?php

include 'include/conexao.php';
include 'include/script/password.php';

try{

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if($senha != $confirmar_senha){

        $retorno = array('retorno'=>'erro','mensagem'=>'Senhas são diferentes, verifique e tente novamente!'); 
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json;
        exit;
        
    }

    $sql = "SELECT email,senha FROM tb_cadastro WHERE email = '$email' AND BINARY senha = sha1('$senha')";

    $comando = $con -> prepare($sql);
    $comando -> execute();
    $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

    if($dados != null){
        $retorno = array('retorno'=>'ok','mensagem'=>'Aguarde, estamos logando...');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        echo $json;

        // session_start();
        // $_SESSION['login'] = $usuario;
        // // header('location: gerenciar-viagens.php');
        exit;
    }else{
        $retorno = array('retorno'=>'erro','mensagem'=>'E-mail ou senha inválidos!');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        echo $json;
    }

}catch(PDOException $erro){
    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;
}




?>