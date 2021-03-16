<?php

include '../functions.php';
include '../controller/vote.controller.php';
?>
<style>
<?php
include '../assets/styles/style.css'
?>
</style>

<?=template_header('Poll Vote')?>

<div class="content poll-vote">
	<h2><?=$poll['title']?></h2>
	<p><?=$poll['desc']?></p>
    <form action="../controller/vote.controller.php?id=<?=$_GET['id']?>" method="post">
        <?php for ($i = 0; $i < count($poll_answers); $i++): ?>
        <label>
            <input type="radio" name="poll_answer" value="<?=$poll_answers[$i]['id']?>"<?=$i == 0 ? ' checked' : ''?>>
            <?=$poll_answers[$i]['title']?>
        </label>
        <?php endfor; ?>
        <div>
            <input type="submit" value="Vote">
            <a href="result.view.php?id=<?=$poll['id']?>">View Result</a>
        </div>
    </form>
</div>

<?=template_footer()?>