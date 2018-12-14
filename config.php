<?php


define('DB_SERVER', 'demo.c7qbcuicfwpb.us-east-2.rds.amazonaws.com');
define('DB_NAME', 'demo');
define('DB_USER', 'root');
define('DB_PASSWORD', '00000');

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if($link === false){
    die("Erro: Nao foi possivel conectar : ". mysqli_connect_error() );
    echo $link;
}

?>
