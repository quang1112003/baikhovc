<?php
if(!$_POST["email"]){
    header("Location: addStudent.php");
}
$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "t2108m";
//connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die($conn->connect_error); //giống return của main, code dừng
}
$sql_txt = "insert into students(studentName,dateOfBirth,address,email,phoneNumber) values (?,?,?,?,?);";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sssss",$name,$birth,$address,$email,$phone);


//set params and execute
$name = $_POST["studentName"];
$birth = $_POST["dateOfBirth"];
$address = $_POST["Address"];
$email = $_POST["EmailAddress"];
$phone = $_POST["phoneNumber"];
$stt->execute();

header("Location: databaseDemo.php");