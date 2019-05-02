<?php

    $host_name = "localhost";
    $user_name = "root";
    $pass = "";
    $database = "testdemo";

    $connect = mysqli_connect($host_name, $user_name, $pass, $database);
    mysqli_set_charset($connect, 'UTF8');

    if(!$connect){
        echo "Connect ERROR !!!!!!!!";
        echo "Debugging erro: " . mysqli_connect_errno() . PHP_EOL;
        die();
    }
?>