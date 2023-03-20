<?php

function displayMakes() {
    global $db;
    $query = 'SELECT * FROM make';
    $statement = $db->prepare($query);
    $statement->execute();
    $makes = $statement->fetchAll();
    $statement->closeCursor();
    return $makes;
}
function deleteMake($makeIDnum) {
    global $db;
    $query = 'DELETE FROM make WHERE ID = :makeIDnum';
    $statement = $db->prepare($query);
    $statement->bindValue(":makeIDnum", $makeIDnum);
    $statement->execute();
    $statement->closeCursor(); 
}
function addMake($makeName) {
    global $db;
    $query = 'INSERT INTO make (MAKE) VALUE (:makeName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':makeName', $makeName);
    $statement->execute();
    $statement->closeCursor();
}

?>