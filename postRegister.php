<?php
//echo "Fullname:".$_POST["fullname"]."<br/>";
//echo "Email: ".$_POST["email"]."<br/>";
//echo "Password: ".$_POST["pwd"]."<br/>";
session_start(); //khởi chạy phiên làm việc để liên kết giữa các trang
$user = [
    "fullname" => $_POST["fullname"],
    "email" => $_POST["email"],
    "pwd" => $_POST["pwd"],
];

$_SESSION["user"] = $user;
echo "Done";