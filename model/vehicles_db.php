<?php

    require('database.php');

    function get_vehicles() {
        global $db;
        $query = 'SELECT * FROM vehicles';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }