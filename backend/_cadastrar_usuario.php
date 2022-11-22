<?php

include 'include/conexao.php';
include 'include/script/password.php';

try{

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if($senha != $confirmar_senha){

        $retorno = array('retorno'=>'erro','mensagem'=>'Senhas são diferentes, verifique e tente novamente!'); 
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json;
        exit;

    }

    $sql = "SELECT `email` FROM tb_cadastro WHERE email = '$email'";
    $resultado = $con->prepare($sql);
    $resultado->execute();
    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC); 

    if($dados != null){
        
        $retorno = array('retorno'=>'erro','mensagem'=>'E-mail já cadastrado, verifique e tente novamente!'); 
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json;
        exit;

    }else{
    
        $sql = "INSERT INTO tb_cadastro(`nome`, `email`, `senha`) VALUES('$nome', '$email', sha1('$senha'))";
        $comando = $con->prepare($sql);
        $comando->execute();

        $retorno = array('retorno'=>'ok','mensagem'=>'Usuário adicionado com sucesso!');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json;

    }

}catch(PDOException $erro){

    $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
    echo $json;

}

$con = null;



    // $nome_original_imagem = $_FILES['imagem']['name'];
    // $extensao = pathinfo($nome_original_imagem,PATHINFO_EXTENSION);
    // if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png' && $extensao != 'svg' && $extensao != ''){
        
    //     $retorno = array('retorno'=>'erro','mensagem'=>'Extensão de imagem inválida!'); 
    //     $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    //     echo $json;
    //     exit;   

    // } 
    // $hash = md5(uniqid($_FILES['imagem']['tmp_name'],true));
    // $nome_final_imagem = $hash.'.'.$extensao;
    // $pasta = '../img/avatar/';
    // move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta.$nome_final_imagem);

?>