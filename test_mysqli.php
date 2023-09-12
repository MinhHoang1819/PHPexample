<?php

$username = "root";
$password = "";

$host = "localhost";
$database = "thuchanh";

//$connection = new mysqli($host, $username, $password, $database);
//if ($connection->connect_error) {
//    die("connection is error");
//}
//$sql = "UPDATE ";
$sql = "SELECT * FROM customers";
//$query = $connection->query($sql);
//// proceed only if a query is executed
//while ($row = $query->fetch_assoc()) {
//    echo $row["id"];
//    echo $row["name"];
//    echo $row["birthday"];
//    echo $row["address"];
//}
//if ($query === TRUE){
//    
//}
try {
    $connection = new PDO("mysql:host = $host; dbname = $database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = $connection->prepare($sql);
    $query->execute();
    
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $item) {
        var_dump($item);die();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
