<?php
session_start();
include 'include/conexao.php';
$login = $_SESSION['loginUser'];

try{

$id = $_POST['id'];

$sql = "DELETE FROM tb_anotacoes WHERE id_categorias = '$id'";
$comando = $con->prepare($sql);
$comando->execute();

$sql2 = "DELETE FROM tb_categorias WHERE id = $id AND login_email = '$login'";
$comando = $con->prepare($sql2);
$comando->execute();

// o location faz a pagina mudar sem o usuario perceber

$retorno = array(
    'retorno'=>'ok',
    'Mensagem'=>'Categoria deletada com sucesso!!!'
);
$json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
echo $json;

} catch(PDOException $erro){

    echo $erro->getMessage();

}



?>