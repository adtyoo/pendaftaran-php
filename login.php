<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <form action="handler_login.php" method="post">
    <div>
        <label for="">Nama</label>
        <input type="text" name="email">
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <button type="submit">Login</button>
</form>
<a href="register.php">Register</a>
</div>

</body>
</html>