<?php

  function pdo_connect_mysql() {
        $DATABASE_HOST = '127.0.0.1';
        $DATABASE_USER = 'm133';
        $DATABASE_PASS = 'm133';
        $DATABASE_NAME = 'phppoll';

        try {

          return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);

        } catch (PDOException $exception) {

          die ('Failed to connect to database!');

        }
    }
?>
