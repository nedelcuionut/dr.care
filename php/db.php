<?php

$host = "localhost";
$user = "credis";
$password = "credis";
$dbName = "clinica";

$conn = new mysqli($host, $user, $password, $dbName);
   if($conn->connect_error){
        die("Conection failed");  
    }
        echo ''; 

