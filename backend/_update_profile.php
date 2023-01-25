<?php 
session_start();
include 'include/conexao.php';
$login = $_SESSION['loginUser'];
try{

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $loc = $_POST['localizacao'];
    $tel = $_POST['tel'];
    $nome_original_imagem = $_FILES['imagem']['name'];
    $senha = $_POST['senha'];
    $desc = $_POST['desc'];

    if($nome_original_imagem != ''){

        $extensao = pathinfo($nome_original_imagem,PATHINFO_EXTENSION);
        if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png' && $extensao != 'svg' && $extensao != ''){
            
            $retorno = array('retorno'=>'erro','mensagem'=>'Extensão de imagem inválida!'); 
            $json = json_encode($retorno, JSON_UNESCAPED_UNICODE); 
            echo $json;
            exit;   

        }else{
            $hash = md5(uniqid($_FILES['imagem']['tmp_name'],true));
            $nome_final_imagem = $hash.'.'.$extensao;
            $pasta = '../page/assets/img/avatar/';
            move_uploaded_file($_FILES['imagem']['tmp_name'],$pasta.$nome_final_imagem);

            $sql = "UPDATE tb_cadastro SET `imagem` = '$nome_final_imagem' WHERE email = '$login'";
            $comando = $con->prepare($sql);
            $comando->execute();
        }
        
    }

    if($senha != ''){
        $sql = "UPDATE tb_cadastro SET `senha` = sha1('$senha') WHERE email = '$login'";
        $comando = $con->prepare($sql);
        $comando->execute();
    }

    $sql = "UPDATE tb_cadastro SET `nome` = '$nome', `email` = '$email', `localizacao` = '$loc', `telefone` = '$tel', `desc` = '$desc' WHERE email = '$login'";
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

$con = null;
?>