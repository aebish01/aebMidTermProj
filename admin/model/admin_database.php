<?php

//dsn
$dsn = "mysql:host=r4wkv4apxn9btls2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=zjhqbx80xqk5ta19";
//username
$username = 'd9c75d6ljf09615i'; 
//password
$password = 'ueuwfffpybvm3bid';

//database connection try catch 
try {
    //name db connection PDO
    $db = new PDO($dsn, $username, $password);
    //echo "connected";
} catch(PDOException $e) {
    //error message
    $errorMessage = 'Database Error!';
    $errorMessage .= $e->getMessage();
    echo $errorMessage;
    exit();
} 


?>