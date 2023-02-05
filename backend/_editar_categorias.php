<?php
    session_start();
    include 'include/conexao.php';
    $login = $_SESSION['loginUser'];
    try{
        $id = $_POST['id'];
        $categorias = $_POST['categorias'];

        $sql = "UPDATE tb_categorias SET `categorias` = '$categorias' WHERE id='$id' AND login_email='$login'";
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