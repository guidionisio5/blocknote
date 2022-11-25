<?php

session_start();
include 'include/conexao.php';
include 'include/script/password.php';

try{

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT email,senha FROM tb_cadastro WHERE email = '$usuario' AND BINARY senha = sha1('$senha')";

    $comando = $con -> prepare($sql);
    $comando -> execute();
    $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

    if($dados != null){
        
        $_SESSION['loginUser'] = $usuario;
        
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