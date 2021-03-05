<?php
if($make_id) {
        if($sort_by === 'year') {
            $vehicles = get_vehicles_by_make_and_year($make_id);
        } else {
            $vehicles = get_vehicles_by_make_and_price($make_id);
        }
        include('view/makes_list.php');
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
    include('view/vehicle_list.php');