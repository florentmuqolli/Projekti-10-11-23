<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: skeletura-main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css\lgreg.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if ($password == $user["password"]) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: skeletura-main.php");
                    die();
                }else{
                    echo "<div class='error-message'>Password is incorrect</div>";
                }
            }else{
                echo "<div class='error-message'>Email is incorrect </div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-ctrl" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-ctrl" placeholder="Password:">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" class="btn btn-primary" name="login">
            </div>
        </form>
        <div><p>Not registered yet? <a href="register.php">Register Here</a></p></div>
    </div>
</body>
</html>