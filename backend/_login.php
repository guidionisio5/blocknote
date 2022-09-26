<?php

include 'include/conexao.php';

try{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT email,senha FROM tb_cadastro WHERE email = '$email' AND BINARY senha = '$senha'";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

    if($dados != null){

        session_start();
        
        $_SESSION['login'] = $usuario;

        var_dump($_SESSION['email']);

        header('location: ../admin/gerenciar-viagens.php');
    }else{
        header('location: ../admin/index.html');
        echo "usuario ou senha invalido";
    }

}catch(PDOException $erro){
    echo $erro -> getMessage();
}




?>