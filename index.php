<?php
    
    require('model/vehicles_db.php');
    

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if(!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if(!$action) {
            $action = 'list_vehicles';
        }
    }

    switch($action) {
        case 'list_vehicles':
            $vehicles = get_vehicles();
            include('public_view/vehicle_list.php');
            break;
        default:
            break;
    }