<?php
session_start();
include_once('include/conexao.php');
$login = $_SESSION['loginUser'];
try {

    $sql = "SELECT id,categorias FROM tb_categorias WHERE login_email = '$login'";

    $comando = $con->prepare($sql);

    $comando->execute();

    $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);


    // echo'<pre>'; 
    // var_dump($retorno);

    echo $json;

} catch(PDOException $e) {

    $retorno = [
        'mensagem' => $e->getMessage(),
        'retorno' => 'erro'
    ];

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
}