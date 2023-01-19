<?php

include 'include/conexao.php';
include 'include/function.php';

try{

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $duvida = $_POST['duvida'];

    validaCampoVazio($nome,'nome');
    validaCampoVazio($email,'email');
    validaCampoVazio($duvida,'duvida');
    
    $sql = "INSERT INTO tb_duvidas(`nome`, `email`, `duvida`) VALUES('$nome', '$email', '$duvida')";
    $comando = $con->prepare($sql);
    $comando->execute();

    $retorno = array('retorno'=>'ok','mensagem'=>'Dúvida adicionada com sucesso! Em breve enviaremos uma resposta!');
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
    echo $json;


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