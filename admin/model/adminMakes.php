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

?>