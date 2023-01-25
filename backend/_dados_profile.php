<?php
session_start();

include_once('include/conexao.php');

$email = $_SESSION['loginUser'];


try {

    $sql = "SELECT nome,email,imagem,localizacao,telefone,`desc` FROM tb_cadastro WHERE email = '$email'";
    $comando = $con->prepare($sql);

    $comando->execute();

    $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

} catch(PDOException $e) {

    $retorno = [
        'mensagem' => $e->getMessage(),
        'retorno' => 'erro'
    ];

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
}