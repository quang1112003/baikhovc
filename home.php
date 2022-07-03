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
    $listSv = [
      "Lê Đức Duy",
      "Lê Phú Cường",
      "Vũ Nhật Minh",
      "Tạ Tuấn Anh"
    ];

    $t2108m = [
            [
                "name" => "Lê Đức Duy",
                "age" => 19,
                "address" => "Quang trung, Ha Dong"
            ],
        [
            "name" => "Lê Cường",
            "age" => 18,
            "address" => "Nam Tu Liem, HN"
        ]
    ];
    ?>
    <h1>danh sách sinh viên <?php echo $classname; ?></h1>
    <ul>
        <?php foreach ($t2108m as $sv) :?>
            <li><?php echo $sv["name"]."--".$sv["age"]; ?></li>
        <?php endforeach; ?>
    </ul>

<table class="table">
    <tr>
        <th>name</th>
        <th>age</th>
        <th>address</th>
    </tr>
    <tr>
        <?php foreach ($t2108m as $sv) :?>
    <tr>
            <td><?php echo $sv["name"]; ?></td>
            <td><?php echo $sv["age"]; ?></td>
            <td><?php echo $sv["address"]; ?></td>
    </tr>
        <?php endforeach; ?>
    </tr>
</table>
</body>
</html>