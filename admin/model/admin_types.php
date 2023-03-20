<?php

function displayTypes() {
    global $db;
    $query = 'SELECT * FROM types';
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}
function deleteTypes($typesIDnum) {
    global $db;
    $query = 'DELETE FROM types WHERE ID = :typesIDnum';
    $statement = $db->prepare($query);
    $statement->bindValue(":typesIDnum", $typesIDnum);
    $statement->execute();
    $statement->closeCursor(); 
}
function addTypes($typesName) {
    global $db;
    $query = 'INSERT INTO types (Type) VALUE (:typesName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':typesName', $typesName);
    $statement->execute();
    $statement->closeCursor();
}

?>