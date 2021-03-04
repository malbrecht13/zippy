<?php

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

    function get_vehicles_by_year() {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                  INNER JOIN classes c 
                  ON c.class_id = v.class_id
                  INNER JOIN types t
                  ON v.type_id = t.type_id
                  INNER JOIN makes m
                  ON m.make_id = v.make_id
                  ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function get_vehicles_by_make_and_price($make_id) {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE m.make_id = :make_id
                ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
        
    }

    function get_vehicles_by_make_and_year($make_id) {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE m.make_id = :make_id
                ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }

    function get_vehicles_by_type_and_price($type_id) {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE t.type_id = :type_id
                ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
        
    }

    function get_vehicles_by_type_and_year($type_id) {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE t.type_id = :type_id
                ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }

    function get_vehicles_by_class_and_price($class_id) {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE c.class_id = :class_id
                ORDER BY v.price DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
        
    }

    function get_vehicles_by_class_and_year($class_id) {
        global $db;
        $query = 'SELECT v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                INNER JOIN classes c 
                ON c.class_id = v.class_id
                INNER JOIN types t
                ON v.type_id = t.type_id
                INNER JOIN makes m
                ON m.make_id = v.make_id
                WHERE c.class_id = :class_id
                ORDER BY v.year DESC';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles; 
    }