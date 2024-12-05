<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "blog_do_zequinha";

//criar conexão

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_error()){
    echo "Falhou a conexão!";
    exit();
}

// echo "Sucesso na conexão!";
?>