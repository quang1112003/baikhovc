<?php
$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "t2108m";
//connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die($conn->connect_error); //giống return của main, code dừng
}
$sql_txt = "select * from students";
$result = $conn->query($sql_txt);
$list =[];
//var_dump($result);
//die();
if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
       $list[] = $row; //thêm sinh viên vào mảng
    }
}
?>
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




<table class="table">
    <tr>
        <th>Tên sinh viên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Điện thoại</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($list as $sv) :?>
    <tr>
        <td><?php echo $sv["studentName"]; ?></td>
        <td><?php echo $sv["dateOfBirth"]; ?></td>
        <td><?php echo $sv["address"]; ?></td>
        <td><?php echo $sv["email"]; ?></td>
        <td><?php echo $sv["phoneNumber"]; ?></td>
        <td>
            <a class="color-primary" href="editStudent.php?id=<?php echo $sv["id"];?>">Edit</a>
        </td>
        <td>
            <a class="color-primary" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $sv["id"] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>


</table>
<div>
    <a href="formsinhvien.php" class="btn btn-primary">Add Student</a>
</div>
</body>
</html>
