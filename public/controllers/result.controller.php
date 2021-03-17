<?php

include_once __DIR__ . '/../assets/functions.php';
include __DIR__ . '/../models/database.php';

$pdo = pdo_connect_mysql();

if (isset($_GET['id'])) {

    $stmt = $pdo->prepare('SELECT * FROM polls WHERE id = ?');
    $stmt->execute([$_GET['id']]);

    $poll = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($poll) {

        $stmt = $pdo->prepare('SELECT * FROM poll_answers WHERE poll_id = ? ORDER BY votes DESC');
        $stmt->execute([$_GET['id']]);

        $poll_answers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $total_votes = 0;
        foreach ($poll_answers as $poll_answer) {

            $total_votes += $poll_answer['votes'];
        }
    } else {
        die ('Poll with that ID does not exist.');
    }
} else {
    die ('No poll ID specified.');
}
?>