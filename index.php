<?php

//add required folders
require('model/database.php');
require('model/regVehicle.php');

$makeId = isset($_GET['makeId']) ? $_GET['makeId'] : '';
$typeId = isset($_GET['typeId']) ? $_GET['typeId'] : '';
$classId = isset($_GET['classId']) ? $_GET['classId'] : '';

if($makeId && $typeId && $classId) {
    $vehicles = getFilteredVehicles($makeId, $typeId, $classId);
    include('view/vehicles.php');
} elseif($makeId && $typeId) {
    $vehicles = getFilteredVehicles($makeId, $typeId, null);
    include('view/vehicles.php');
} elseif($makeId && $classId) {
    $vehicles = getFilteredVehicles($makeId, null, $classId);
    include('view/vehicles.php');
} elseif($typeId && $classId) {
    $vehicles = getFilteredVehicles(null, $typeId, $classId);
    include('view/vehicles.php');
} elseif($makeId) {
    $vehicles = getFilteredVehicles($makeId, null, null);
    include('view/vehicles.php');
} elseif($typeId) {
    $vehicles = getFilteredVehicles(null, $typeId, null);
    include('view/vehicles.php');
} elseif($classId) {
    $vehicles = getFilteredVehicles(null, null, $classId);
    include('view/vehicles.php');
} else {
$vehicles = displayVehicles();
$makes = getMake();
$types = getTypes();
$classes = getClass();
include('view/vehicles.php');
}

?>