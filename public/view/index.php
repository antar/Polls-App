<?php
// index.php

    require_once '../controller/config.php';
    require_once '../controller/database.php';
    
    $db = new database($pdo);
    $rows = $db->getData();
?>