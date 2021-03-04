<?php 
    $dsn = 'mysql:host=localhost;dbname=zua';
    $username = 'root';

    try {
        $db = new PDO($dsn, $username);
    } catch(PDOException $e) {
        echo $e;
    }

?>