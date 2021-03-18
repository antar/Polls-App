<?php

  function pdo_connect_mysql() {
        $DATABASE_HOST = '***********'; // probably localhost or 127.0.0.1
        $DATABASE_USER = '***********'; // db user
        $DATABASE_PASS = '***********'; // db password
        $DATABASE_NAME = '***********'; // db name

        try {

          return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);

        } catch (PDOException $exception) {

          die ("Can't connect to database!");

        }
    }
?>
