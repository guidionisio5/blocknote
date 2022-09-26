<?php

include 'include/conexao.php';
include 'include/script/password.php';

try{

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $nome_original_imagem = $_FILES['imagem']['name'];
    $extensao = pathinfo($nome_original_imagem,PATHINFO_EXTENSION);
    if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png' && $extensao != 'svg'){
        echo 'Formato de imagem inválido';
        exit;     
    } 
    $hash = md5(uniqid($_FILES['imagem']['tmp_name'],true));
    $nome_final_imagem = $hash.'.'.$extensao;
    $pasta = '../img/avatar/';
    move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta.$nome_final_imagem);

    $sql = "SELECT * FROM tb_cadastro WHERE email = '$email'";
    $resultado = $con->prepare($sql);
    $resultado->execute();

    if($resultado > 0){

        header('Location: cadastro_usuario.php');
        $con = null;
    }else{
    
        $sql = "INSERT INTO tb_cadastro(`nome`, `sobrenome`, `email`, `data_nascimento`, `telefone`, `imagem`, `senha`) VALUES('$nome', '$sobrenome', '$email', '$nascimento', '$telefone', '$nome_final_imagem', sha1('$senha'))";
        $comando = $con->prepare($sql);
        $comando->execute();
        
        header('Location: index.php');

        $con = null;
    }

}catch(PDOException $erro){
    echo $erro->getMessage();
    die();
}

$con = null;

?>