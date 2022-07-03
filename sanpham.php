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
$sql_txt1 = "select * from crud";
$result = $conn->query($sql_txt1);
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
        <th>Tên sản phẩm</th>
        <th>giá</th>
        <th>đơn vị</th>
        <th>số lượng</th>
        <th>Mô tả</th>
        <th>trạng thái</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($result as $sv) :?>
        <tr>
            <td><?php echo $sv["name"]; ?></td>
            <td><?php echo $sv["price"]; ?></td>
            <td><?php echo $sv["unit"]; ?></td>
            <td><?php echo $sv["quantity"]; ?></td>
            <td><?php echo $sv["description"]; ?></td>
            <td><?php echo $sv["status"]; ?></td>
            <td>
                <a class="color-primary" href="editStudent.php?id=<?php echo $sv["id"];?>">Edit</a>
            </td>
            <td>
                <a class="color-primary" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $sv["Id"] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>


</table>
<form action="formsinhvien.php">
    <button type="submit"> Add student</button>
</form>
</body>
</html>
