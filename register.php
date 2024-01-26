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
    <title>Register</title>
    <link rel="stylesheet" href="css\lgreg.css">
</head>
<body>
<div class="container">
    <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["full_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordConfirm = $_POST["confirm_password"];
            $errors = array();
            if (empty($fullName) or empty($email) or empty($password) or empty($passwordConfirm)) {
                array_push($errors,"All fields are required!");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid!");
            }
            if (strlen($password)<7) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password!==$passwordConfirm) {
                array_push($errors, "Passwords do not match!");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
            if (count($errors)>0) {
                foreach ($errors as $error) {
                    echo "<div class='error-message'>$error</div>";
                }
            }
            else {
                $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $password);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='success-message'>Your login was successful!</div>";
                }else{
                    die("Something went wrong");
                }
            }
        }
    ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" name="full_name" class="form-ctrl" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-ctrl" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-ctrl" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" class="form-ctrl" placeholder="Confirm Password:">
            </div>
            <div class="form-btn">
                <input type="submit" value="Register" class="btn btn-primary" name="submit">
            </div>
        </form>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
    </div>
</body>
</html>