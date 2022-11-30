<?php
session_start();

$login = $_SESSION['loginUser'];

if(!isset($_SESSION['loginUser'])) {
    $_SESSION['error'] = 'Você não está logado!';
    header('Location: ../login.php');
}

// include '../backend/include/conexao.php';

// $sql = "SELECT * FROM tb_cadastro WHERE email = '$login'";
// $comando = $con -> prepare($sql);
// $comando -> execute();
// $dados = $comando->fetchALL(PDO::FETCH_ASSOC);

?>