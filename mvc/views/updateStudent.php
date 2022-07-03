<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<form method="post" action="?page=post_student.php?id=<?php echo $student["id"];?>">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Student Name</label>
        <input required type="text" class="form-control" value="<?php echo $student["studentName"];?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="studentName">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
        <input required type="date" class="form-control" value="<?php echo $student["dateOfBirth"];?>" id="exampleInputPassword1" name="dateOfBirth">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Address</label>
        <input required type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $student["address"];?>"  name="Address">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $student["email"];?>"  name="EmailAddress">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $student["phoneNumber"];?>"  name="phoneNumber">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>
</body>
</html>
