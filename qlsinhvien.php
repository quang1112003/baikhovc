<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<?php
$classname = "T2108M";
$t2108mm = [
        "tensv" => $_POST["tensv"],
        "ngaysinh"=>$_POST["ngaysinh"],
        "diachi"=>$_POST["diachi"],
        "mail" => $_POST["mail"],
        "dienthoai" => $_POST["dienthoai"],
];
?>

<h1>danh sách sinh viên <?php echo $classname; ?></h1>



<table class="table">
    <tr>
        <th>Tên sinh viên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Điện thoại</th>
        <th>Delete</th>
    </tr>
    <tr>
        <td><?php echo $t2108mm["tensv"]; ?></td>
        <td><?php echo $t2108mm["ngaysinh"]; ?></td>
        <td><?php echo $t2108mm["diachi"]; ?></td>
        <td><?php echo $t2108mm["mail"]; ?></td>
        <td><?php echo $t2108mm["dienthoai"]; ?></td>
        <td><button type="submit" >Delete</button></td>
    </tr>


</table>
<form action="formsinhvien.php">
<button type="submit"> Add student</button>
</form>
</body>
</html>