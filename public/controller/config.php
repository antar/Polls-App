<?php
// config.php

    $host = '127.0.0.1';
    $db_name = 'm133';
    $db_username = 'm133';
    $db_password = 'm133';

    try
    {
        $pdo = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
?>