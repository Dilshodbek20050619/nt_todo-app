<?php

   $severname = "localhost";
   $username = "root";
   $password = "2005";

try {
    $conn = new PDO("mysql:host=$severname;dbname=dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return 'Connect successfully';
}
catch(PDOException $e) {
    return 'Connection failed: ' . $e->getMessage();
}

