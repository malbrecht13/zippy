<?php

switch($action) {
    default:
        $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
        break;
}

include('view/vehicle_list.php');