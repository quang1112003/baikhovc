<?php
//echo "Fullname:".$_POST["fullname"]."<br/>";
//echo "Email: ".$_POST["email"]."<br/>";
//echo "Password: ".$_POST["pwd"]."<br/>";
session_start(); //khởi chạy phiên làm việc để liên kết giữa các trang
$user1 = [
    "tensv" => $_POST["tensv"],
    "ngaysinh" => $_POST["ngaysinh"],
    "diachi" => $_POST["diachi"],
    "mail" => $_POST["mail"],
    "dienthoai" => $_POST["dienthoai"],
];

$_SESSION["user1"] = $user1;
echo "Done";
