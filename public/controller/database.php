<?php 
// database.php

class database
{
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getData()
    {
        $query = $this->pdo->prepare('show tables');
        $query->execute();
        return $query->fetchAll();
    }
}
?>