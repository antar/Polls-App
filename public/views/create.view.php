<?php

include '../assets/functions.php';
include '../controller/create.controller.php';
?>
<style>
<?php
include '../assets/styles/style.css'
?>
</style>

<?=template_header('Create Poll')?>

<div class="content update">
	<h2>Create Poll</h2>
    <form action="../controller/create.controller.php" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="desc">Description</label>
        <input type="text" name="desc" id="desc">
        <label for="answers">Answers (per line)</label>
        <textarea name="answers" id="answers"></textarea>
        <input type="submit" value="Create">
    </form>
</div>