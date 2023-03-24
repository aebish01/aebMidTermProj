<?php

//add required folders
require('model/database.php');
require('model/regVehicle.php');

$makeId = isset($_GET['makeId']) ? $_GET['makeId'] : '';
$typeId = isset($_GET['typeId']) ? $_GET['typeId'] : '';
$classId = isset($_GET['classId']) ? $_GET['classId'] : '';
$radiofilter = isset($_POST['filter']);

if($makeId && $typeId && $classId && $radiofilter) {
    $vehicles = getFilteredVehicles($makeId, $typeId, $classId, $radiofilter);
    include('view/vehicles.php');
} elseif($makeId && $typeId && $classId) {
    $vehicles = getFilteredVehicles($makeId, $typeId, $classId, $radiofilter);
    include('view/vehicles.php');
}elseif($makeId && $typeId && $radiofilter) {
    $vehicles = getFilteredVehicles($makeId, $typeId, null, $radiofilter);
    include('view/vehicles.php'); 
} elseif($makeId && $typeId) {
    $vehicles = getFilteredVehicles($makeId, $typeId, null, $radiofilter);
    include('view/vehicles.php');
} elseif($makeId && $classId && $radiofilter) {
    $vehicles = getFilteredVehicles($makeId, null, $classId, $radiofilter);
    include('view/vehicles.php');
} elseif($makeId && $classId) {
    $vehicles = getFilteredVehicles($makeId, null, $classId, $radiofilter);
    include('view/vehicles.php');
} elseif($typeId && $classId && $radiofilter) {
    $vehicles = getFilteredVehicles(null, $typeId, $classId, $radiofilter);
    include('view/vehicles.php'); 
} elseif($typeId && $classId) {
    $vehicles = getFilteredVehicles(null, $typeId, $classId, $radiofilter);
    include('view/vehicles.php');
} elseif($makeId) {
    $vehicles = getFilteredVehicles($makeId, null, null, $radiofilter);
    //include('view/vehicles.php');
    header('Location: http://aebmidterm.herokuapp.com');
} elseif($typeId) {
    $vehicles = getFilteredVehicles(null, $typeId, null, $radiofilter);
    include('view/vehicles.php');
} elseif($classId) {
    $vehicles = getFilteredVehicles(null, null, $classId, $radiofilter);
    include('view/vehicles.php');
} elseif($radiofilter) {
    $vehicles = getFilteredVehicles(null, null, $classId, $radiofilter);
    include('view/vehicles.php');
} else {
$vehicles = displayVehicles();
$makes = getMake();
$types = getTypes();
$classes = getClass();

include('view/vehicles.php');
}

?>