<?php 
include_once('../backend/include/conexao.php');

$email = $_SESSION['loginUser'];

try {

    $sql = "SELECT imagem FROM tb_cadastro WHERE email = '$email'";
    $comando = $con->prepare($sql);
    $comando->execute();
    
    $retorno = $comando->fetch(PDO::FETCH_ASSOC);
    
    $imagem = $retorno['imagem'];

} catch(PDOException $e) {

    $retorno = [
        'mensagem' => $e->getMessage(),
        'retorno' => 'erro'
    ];

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;
}



?>