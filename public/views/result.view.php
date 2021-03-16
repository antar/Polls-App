<?php

include '../functions.php';
include '../controller/result.php';
?>
<style>
<?php
include '../assets/styles/style.css'
?>
</style>

<?=template_header('Poll Results')?>

<div class="content poll-result">
	<h2><?=$poll['title']?></h2>
	<p><?=$poll['desc']?></p>
    <div class="wrapper">
        <?php foreach ($poll_answers as $poll_answer): ?>
        <div class="poll-question">
            <p><?=$poll_answer['title']?> <span>(<?=$poll_answer['votes']?> Votes)</span></p>
            <div class="result-bar" style= "width:<?=@round(($poll_answer['votes']/$total_votes)*100)?>%">
                <?=@round(($poll_answer['votes']/$total_votes)*100)?>%
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>