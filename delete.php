<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "t2108m";
//Connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn -> connect_error){
    die($conn -> connect_error);
}
$sql_txt = "delete from students where id = ".$_GET["id"];

$result = $conn->query($sql_txt);

header("Location: databaseDemo.php");
