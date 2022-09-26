<?php

try{
define('SERVER', 'localhost');
define('USER', 'root');
define('SENHA', '');
define('BANCO', 'db_blocknote');

$con = new PDO("mysql:host=".SERVER.";dbname=".BANCO.";charset=utf8", USER, SENHA);
// set the PDO error mode to exception
$con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Conexão foi bem sucedida! ";


}catch(PDOException $erro){
    echo $erro -> getMessage();
}

