<?php

function displayClasses() {
    global $db;
    $query = 'SELECT * FROM class';
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();
    return $classes;
}
function deleteClass($classIDnum) {
    global $db;
    $query = 'DELETE FROM class WHERE ID = :classIDnum';
    $statement = $db->prepare($query);
    $statement->bindValue(":classIDnum", $classIDnum);
    $statement->execute();
    $statement->closeCursor(); 
}
function addClass($className) {
    global $db;
    $query = 'INSERT INTO class (Class) VALUE (:className)';
    $statement = $db->prepare($query);
    $statement->bindValue(':className', $className);
    $statement->execute();
    $statement->closeCursor();
}

?>