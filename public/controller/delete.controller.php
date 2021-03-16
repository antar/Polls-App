<?php

include_once '../assets/functions.php';
include '../models/database.php';
?>
<style>
<?php
include '../assets/styles/style.css'
?>
</style>
<?php
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['id'])) {

    $stmt = $pdo->prepare('SELECT * FROM polls WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $poll = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$poll) {
        die ('Poll doesn\'t exist with that ID!');
    }

    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {

            $stmt = $pdo->prepare('DELETE FROM polls WHERE id = ?');
            $stmt->execute([$_GET['id']]);

            $stmt = $pdo->prepare('DELETE FROM poll_answers WHERE poll_id = ?');
            $stmt->execute([$_GET['id']]);

            $msg = 'You have deleted the poll!';
        } else {

            echo "<script>window.location = '/M133-Polly-Abstimmungs-App/public/index.php'</script>";
        }
    }
} else {
    die ('No ID specified!');
} ?>
<?=template_header('Delete')?>
<div class="content delete">
	<h2>Delete Poll #<?=$poll['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete poll #<?=$poll['id']?>?</p>
    <div class="yesno">
        <a href="../controller/delete.controller.php?id=<?=$poll['id']?>&confirm=yes">Yes</a>
        <a href="../controller/delete.controller.php?id=<?=$poll['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>
