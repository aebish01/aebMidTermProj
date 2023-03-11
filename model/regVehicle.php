<?php
//display vehicles
function displayVehicles() {
    global $db;
    $query = 'SELECT * FROM vehicles';
    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}
//get make 
function getMakeName($makeID) {
    global $db;
    $query = 'SELECT * FROM make WHERE ID = :makeId';
    $statement = $db->prepare($query);
    $statement->bindValue(":makeId", $makeID);
    $statement->execute();
    $make = $statement->fetchAll();
    $statement->closeCursor();
    $make_name = $make[0]['Make'];
    return $make_name;
}
//get type
function getTypeName($typeID) {
    global $db;
    $query = 'SELECT * FROM types WHERE ID = :typeId';
    $statement = $db->prepare($query);
    $statement->bindValue(":typeId", $typeID);
    $statement->execute();
    $type = $statement->fetchAll();
    $statement->closeCursor();
    $type_name = $type[0]['Type'];
    return $type_name;
}
//get class
function getClassName($classID) {
    global $db;
    $query = 'SELECT * FROM class WHERE ID = :classId';
    $statement = $db->prepare($query);
    $statement->bindValue(":classId", $classID);
    $statement->execute();
    $class = $statement->fetchAll();
    $statement->closeCursor();
    $class_name = $class[0]['Class'];
    return $class_name;
}
//display make
function getMake() {
    global $db;
    $query = 'SELECT * FROM make';
    $statement = $db->prepare($query);
    $statement->execute();
    $makes = $statement->fetchAll();
    $statement->closeCursor();
    return $makes;
}
//display type
function getTypes() {
    global $db;
    $query = 'SELECT * FROM types';
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}
//display class
function getClass() {
    global $db;
    $query = 'SELECT * FROM class';
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();
    return $classes;
}
?>