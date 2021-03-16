<?php

include 'functions.php';

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

  $msg = 'Created Successfully!';

}

?>

<?=template_header('Create Poll')?>

<div class="content update">
	<h2>Create Poll</h2>
    <form action="create.php" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="desc">Description</label>
        <input type="text" name="desc" id="desc">
        <label for="answers">Answers (per line)</label>
        <textarea name="answers" id="answers"></textarea>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>