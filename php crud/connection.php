<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'crudoperation';

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if(!$connection){
        echo "Error";
    }
?>