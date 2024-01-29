<?php
if (isset($_POST['loginperadmin'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username == "admin" && $password == "crimsons") {
    session_start();
    $_SESSION["user2"] = "admin";
    header("Location: admintools.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="loginperadmin.php" method="post">
                <div class="form-field">
                    <input class="form-ctrl" type="text" name="username" id="" placeholder="Username">
                </div>
                <div class="form-field mb-4">
                    <input class="form-ctrl" type="password" name="password" id="" placeholder="Password">
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="Login" name="loginperadmin">
                </div>
            </form>
        </div>
    </div>
</body>
</html>