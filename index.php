<?php
    
    require('model/database.php');
    require('model/vehicles_db.php');
    require('model/makes_db.php');
    require('model/types_db.php');
    require('model/classes_db.php');

    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();

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
    
    include('public_view/vehicle_list.php');
      