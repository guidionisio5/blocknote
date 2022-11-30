<?php
session_start();

$login = $_SESSION['loginUser'];

if(!isset($_SESSION['loginUser'])) {
    $_SESSION['error'] = 'Você não está logado!';
    header('Location: ../login.php');
}


?>