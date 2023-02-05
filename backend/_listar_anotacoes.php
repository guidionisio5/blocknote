<?php
session_start();
include_once('include/conexao.php');
$login = $_SESSION['loginUser'];
$idC = $_POST['id'];

try {

    $sql = "SELECT id,titulo,id_categorias,anotacao,descricao,data_cadastro FROM tb_anotacoes WHERE id_categorias = '$idC' AND login_email = '$login'";

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