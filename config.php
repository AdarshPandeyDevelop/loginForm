<?php

$host = "localhost";
$username = "root";
$password = "adarshpandey";

try{
    $conn = new PDO("mysql:host=$host;dbname=survey", $username, $password);

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "successfull";
}
catch(PDOException $err){

    echo "error occured". $err->getMessage();
}

?>