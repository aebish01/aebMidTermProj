<?php

//add required folders
require('model/database.php');
require('model/regVehicle.php');

$makeID = filter_input(INPUT_POST, 'makeId', FILTER_UNSAFE_RAW);


$vehicles = displayVehicles();
$makes = getMake();
$types = getTypes();
$classes = getClass();
include('view/vehicles.php');

?>