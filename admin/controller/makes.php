<?php 

switch($action) {
    case 'delete_make':
        delete_make($make_id);
        include('view/makes_list.php');
        break;
    case 'edit_makes':
        $makes = get_makes();
        include('view/makes_list.php');
        break;
    default:
        $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);
        include('view/vehicle_list.php');
        break;
}