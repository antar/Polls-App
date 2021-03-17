<?php

  function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="assets/styles/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
      </head>
      <body>
        <nav class="navtop">
          <div>
            <h1>Voting & Poll System</h1>
                <a href="/index.php"><i class="fas fa-poll-h"></i>Polls</a>
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