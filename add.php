<?php
//require_once 'src/DB.php';

$title=$_POST['title'];
$status=$_POST['status'];
$due_date=date("Y-m-d H:i:s");

//echo $title;

$severname = "localhost";
$username = "root";
$password = "2005";

try {
    $conn = new PDO("mysql:host=$severname;dbname=todo_app", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connect successfully';
}
catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


//$sql="INSERT INTO todos (title,status,due_date) VALUES (':title',':status',':due_date')";
//
//$stmt=$conn->prepare($sql);
//$stmt->bindParam(':title',$title);
//$stmt->bindParam(':status',$status);
//$stmt->bindParam(':due_date',$due_date);
//$stmt->execute();
//header("Location:index.php");


