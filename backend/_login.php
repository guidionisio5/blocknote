<?php

session_start();
include 'include/conexao.php';
include 'include/script/password.php';
include 'include/function.php';

try{

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    validaCampoVazio($email,'email');
    validaCampoVazio($senha,'senha');

    $sql = "SELECT id,email,senha FROM tb_cadastro WHERE email = '$email' AND BINARY senha = sha1('$senha')";

    $comando = $con -> prepare($sql);
    $comando -> execute();
    $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

    if($dados != null){
        
        $_SESSION['loginUser'] = $email;
        
        $retorno = array('retorno'=>'ok','mensagem'=>'Aguarde, estamos logando...');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        echo $json;

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