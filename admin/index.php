<?php
    
    require('../model/database.php');
    require('../model/vehicles_db.php');
    require('../model/makes_db.php');
    require('../model/types_db.php');
    require('../model/classes_db.php');

    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

    switch($action) {
        case 'delete_vehicle':
            $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
            delete_vehicle($vehicle_id);
            include('controller/vehicles.php');
            break;
        default:
            include('controller/vehicles.php');
            break;
    }

    
      
