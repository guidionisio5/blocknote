<?php
include 'include/conexao.php';

try{

$id = $_POST['id'];

$sql = "DELETE FROM tb_anotacoes WHERE id = $id";

$comando = $con->prepare($sql);

$comando->execute();

// o location faz a pagina mudar sem o usuario perceber

$retorno = array(
    'retorno'=>'ok',
    'Mensagem'=>'Anotação deletada com sucesso!!!'
);
$json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
echo $json;

} catch(PDOException $erro){

    echo $erro->getMessage();

}



?>