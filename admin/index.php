<?php

//add required folders
require('model/admin_database.php');
require('model/admin_Makes.php');
require('model/admin_regVehicle.php');
require('model/admin_types.php');
require('model/admin_class.php');

$makeId = isset($_GET['makeId']) ? $_GET['makeId'] : '';
$typeId = isset($_GET['typeId']) ? $_GET['typeId'] : '';
$classId = isset($_GET['classId']) ? $_GET['classId'] : '';
$radiofilter = isset($_POST['filter']);
$vehicleIdNum = filter_input(INPUT_POST, 'vehIDnum', FILTER_VALIDATE_INT);
$makeIdNum = filter_input(INPUT_POST, 'makeIDnum', FILTER_VALIDATE_INT);
$typeIdNum = filter_input(INPUT_POST, 'typeIDNum', FILTER_VALIDATE_INT);
$classIdNum = filter_input(INPUT_POST, 'classIDNum', FILTER_VALIDATE_INT);
$addMake = filter_input(INPUT_POST, 'addMake', FILTER_UNSAFE_RAW);
$addTypes = filter_input(INPUT_POST, 'addTypes', FILTER_UNSAFE_RAW);
$addClass = filter_input(INPUT_POST, 'addClass', FILTER_UNSAFE_RAW);

if($makeId && $typeId && $classId && $radiofilter) {
    $vehicles = getFilteredVehicles($makeId, $typeId, $classId, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($makeId && $typeId && $classId) {
    $vehicles = getFilteredVehicles($makeId, $typeId, $classId, $radiofilter);
    include('view/admin_vehicles.php');
}elseif($makeId && $typeId && $radiofilter) {
    $vehicles = getFilteredVehicles($makeId, $typeId, null, $radiofilter);
    include('view/admin_vehicles.php'); 
} elseif($makeId && $typeId) {
    $vehicles = getFilteredVehicles($makeId, $typeId, null, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($makeId && $classId && $radiofilter) {
    $vehicles = getFilteredVehicles($makeId, null, $classId, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($makeId && $classId) {
    $vehicles = getFilteredVehicles($makeId, null, $classId, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($typeId && $classId && $radiofilter) {
    $vehicles = getFilteredVehicles(null, $typeId, $classId, $radiofilter);
    include('view/admin_vehicles.php'); 
} elseif($typeId && $classId) {
    $vehicles = getFilteredVehicles(null, $typeId, $classId, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($makeId) {
    $vehicles = getFilteredVehicles($makeId, null, null, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($typeId) {
    $vehicles = getFilteredVehicles(null, $typeId, null, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($classId) {
    $vehicles = getFilteredVehicles(null, null, $classId, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($radiofilter) {
    $vehicles = getFilteredVehicles(null, null, $classId, $radiofilter);
    include('view/admin_vehicles.php');
} elseif($addMake) { 
    addMake($addMake);
    header('Location: http://localhost/aebMidTermProj/admin/?action=displayMake');
} elseif($addTypes) {
    addTypes($addTypes);
    header('Location: http://localhost/aebMidTermProj/admin/?action=displayType');
} elseif($addClass) {
    addClass($addClass);
    header('Location: http://localhost/aebMidTermProj/admin/?action=displayClass');
} else {
        $action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
        if (!$action) {
            $action = 'listItems';
        }
    }
    switch ($action) {
        case "deleteVehicle" :
            deleteVehicle($vehicleIdNum);
            include('view/admin_vehicles.php');
            break;
        case "deleteMake" :
            deleteMake($makeIdNum);
            header('Location: http://localhost/aebMidTermProj/admin/?action=displayMake');
        case "displayMake" :
            $makes = displayMakes();
            include('view/displayMake.php');
            break;
        case "deleteTypes" :
            deleteTypes($typeIdNum);
            header('Location: http://localhost/aebMidTermProj/admin/?action=displayType');
        case "displayType" :
            $types = displayTypes();
            include('view/admin_types.php');
            break;
        case "deleteClass" :
            deleteClass($classIdNum);
            header('Location: http://localhost/aebMidTermProj/admin/?action=displayClass');
        case "displayClass" :
            $classes = displayClasses();
            include('view/admin_classes.php');
            break;
        case "addVehicle" :
        default:
            $vehicles = displayVehicles();
            $makes = getMake();
            $types = getTypes();
            $classes = getClass();
            include('view/admin_vehicles.php');
    }

    
}

?>