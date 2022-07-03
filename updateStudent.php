<?php
$id = $_GET['id'];
if(!$_POST["email"]){
    header("Location:editStudent.php?id=".$id);
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
$sql_txt = "update students set studentName=?,dateOfBirth=?,address=?,email=?,phoneNumber=? where id=?";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sssssi",$name,$birth,$address,$email,$phone,$sid);


//set params and execute
$name = $_POST["studentName"];
$birth = $_POST["dateOfBirth"];
$address = $_POST["Address"];
$email = $_POST["EmailAddress"];
$phone = $_POST["phoneNumber"];
$sid = $id;
$stt->execute();

header("Location: databaseDemo.php");