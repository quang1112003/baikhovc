<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="postRegister.php">
        <div class ="form group">
            <label>Fullname</label>
            <input required type="text" name="fullname">
        </div>

        <div class ="form group">
            <label>email</label>
            <input required type="text" name="email">
        </div>

        <div class ="form group">
            <label>password</label>
            <input required type="text" name="pwd">
        </div>
        <div class ="form group">
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
