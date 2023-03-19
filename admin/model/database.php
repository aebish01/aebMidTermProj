<?php

//dsn
$dsn = "mysql:host=localhost; dbname=zippyusedautos";
//username
$username = 'root'; 
//password
//$password = 'pa55word';

//database connection try catch 
try {
    //name db connection PDO
    $db = new PDO($dsn, $username);
    //echo "connected";
} catch(PDOException $e) {
    //error message
    $errorMessage = 'Database Error!';
    $errorMessage .= $e->getMessage();
    echo $errorMessage;
    exit();
} 


?>