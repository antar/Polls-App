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

  function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
      </head>
      <body>
        <nav class="navtop">
          <div>
            <h1>Voting & Poll System</h1>
                <a href="index.php"><i class="fas fa-poll-h"></i>Polls</a>
          </div>
        </nav>
    EOT;
    }

  function template_footer() {
    echo <<<EOT
        </body>
    </html>
    EOT;
    }
    
?>