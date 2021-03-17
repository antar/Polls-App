<?php

include __DIR__ . '/../models/database.php';
include_once __DIR__ . '/../assets/functions.php';
?>
<style>
<?php
include '../assets/styles/style.css'
?>
</style>
<?php
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {

  $title = isset($_POST['title']) ? $_POST['title'] : '';
  $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
  $stmt = $pdo->prepare('INSERT INTO polls VALUES (NULL, ?, ?)');
  $stmt->execute([$title, $desc]);
  $poll_id = $pdo->lastInsertId();
  $answers = isset($_POST['answers']) ? explode(PHP_EOL, $_POST['answers']) : '';

  foreach ($answers as $answer) {

      if (empty($answer)) continue;
      $stmt = $pdo->prepare('INSERT INTO poll_answers VALUES (NULL, ?, ?, 0)');
      $stmt->execute([$poll_id, $answer]);

  }

  echo "<script>window.location = '/M133-Polly-Abstimmungs-App/public/index.php'</script>";

}

?>

<div class="content update">
    <?php if ($msg): ?>
    <?=template_header('Create Poll')?>
    <style>
        .content {
            width: auto;
        }
    </style>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>