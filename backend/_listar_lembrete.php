<?php
session_start();
include_once('include/conexao.php');
$login = $_SESSION['loginUser'];

try {

    $sql = "SELECT id,titulo,data_lembrete,tempo FROM tb_lembretes WHERE login_email = '$login'";

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