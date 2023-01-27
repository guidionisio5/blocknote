<?php
    include 'include/conexao.php';

    try{
        $id = $_POST['id'];
        $categorias = $_POST['categorias'];

        $sql = "UPDATE tb_categorias SET `categorias` = '$categorias' WHERE id='$id'";
        $comando = $con->prepare($sql);
        $comando->execute();

        $retorno = array('retorno'=>'ok','mensagem'=>'Atualizado com sucesso!');
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
        echo $json;

    }catch(PDOException $erro){
        $retorno = array('retorno'=>'erro','mensagem'=>$erro->getMessage());
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        echo $json;
    }

?>