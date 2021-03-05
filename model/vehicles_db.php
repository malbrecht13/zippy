<?php

    function get_vehicles() {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
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
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
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

    function get_vehicle_count() {
        global $db;
        $query = 'SELECT COUNT(*) FROM vehicles';
        $statement = $db->prepare($query);
        $statement->execute();
        $count = $statement->fetch();
        $statement->closeCursor();
        return $count;
    }

    function delete_vehicle($vehicle_id) {
        global $db;
        $query = 'DELETE FROM vehicles
                  WHERE vehicle_id = :vehicle_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicle_id', $vehicle_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_vehicle($make_id, $type_id, $class_id, $year, $model, $price) {
        global $db;
        $query = 'INSERT INTO vehicles (make_id, type_id, class_id, year, model, price)
                  VALUES (:make_id, :type_id, :class_id, :year, :model, :price)';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $statement->closeCursor();
    }

    function list_vehicles($make_id, $sort_by, $type_id, $class_id) {
        if($make_id) {
            if($sort_by === 'year') {
                $vehicles = get_vehicles_by_make_and_year($make_id);
            } else {
                $vehicles = get_vehicles_by_make_and_price($make_id);
            }
        } else if($type_id) {
            if($sort_by === 'year') {
                $vehicles = get_vehicles_by_type_and_year($type_id);
            } else {
                $vehicles = get_vehicles_by_type_and_price($type_id);
            }
        } else if($class_id) {
            if($sort_by === 'year') {
                $vehicles = get_vehicles_by_class_and_year($class_id);
            } else {
                $vehicles = get_vehicles_by_class_and_price($class_id);
            }
        } else {
            if($sort_by === 'year') {
                $vehicles = get_vehicles_by_year();
            } else {
                $vehicles = get_vehicles();
            }
        }
        return $vehicles;
    }

    

    

    