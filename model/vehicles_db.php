<?php

    require('database.php');

    function get_vehicles() {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                  INNER JOIN classes c 
                  ON c.class_id = v.class_id
                  INNER JOIN types t
                  ON v.type_id = t.type_id
                  INNER JOIN makes m
                  ON m.make_id = v.make_id
                  ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }