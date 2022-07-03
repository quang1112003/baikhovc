<?php

session_start();
var_dump($_SESSION["user"]);
$x = 10;
$x = "hello";
$y = true;

echo $x;

$list = [];

$list[] = 10;
$list[] = "Hello";
$list[] = "t2108m";

//
//$list["name"] = "Nguyễn Văn An";
//
//$list["age"] = 19;

$sv = [
    "name" => "nguyễn văn an",
    "age" => 19,
    "address" => "số 8 tôn thất thuyết"
];

for($i = 0; $i<count($list);$i++){
    echo $list[$i]."<br/>";
}

foreach ($list as $item) { //cắt list thành các item, in ra số thứ tự 0,1,2 nếu dùng key value
    echo $item."<br/>";
}

foreach ($sv as $key => $value) {
    echo $key."=".$value."<br/>";
}
tinhTong(4,6);
//$t = tinhTong(3,5)
function tinhTong($a,$b){
    echo $a + $b;
//    return $a + $b;
}