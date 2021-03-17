<?php

  function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'pirovino_test';
        $DATABASE_PASS = 'tU!CjL,3;A8>7';
        $DATABASE_NAME = 'pirovino_test';

        try {

          return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);

        } catch (PDOException $exception) {

          die ('Failed to connect to database!');

        }
    }
?>
