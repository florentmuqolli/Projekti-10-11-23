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
    <link rel="stylesheet" href="Lgreg.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<header> 
    <a href="#" class="crimson"> Crimson's</a>

    <input type="checkbox" id="check">
    <label for="check" class="ikonat">
        <i class='bx bx-menu' id="menu"></i>
        <i class='bx bx-x' id="close"></i>
    </label>
    <nav class="ubt">
        <a href="#">Home</a>
        <a href="Aboutusi.php" >About Us</a>
        <a href="Kontakt.php" class="kontaktona"> Contact</a>
        <a href="cms\Faq.php"> FAQ</a>
    </nav>
</header>
<body>
    <img src="img\event_banner_csgo_left.webp" alt="event_banner_csgo_left" class="event_banner_csgo_left">
    <img src="img\home-logo.webp" alt="home-logo" class="home-logo">
    <img src="img\event_banner_csgo_right.webp" alt="event_banner_csgo_right" class="event_banner_csgo_right">
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
                    echo "<div class='success-message'>Your register was successful!</div>";
                    header("Location: skeletura-main.php");
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
        <div class="reghere"><p>Already Registered <a href="login.php">Login Here</a></p></div>
    </div>

    <footer>
        <div class="d1">
            <div class="titull">
                <div class="lista">
                    <h4>Crimson's</h4>
                    <ul>
                        <li><a href="">Terms of Service</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Crimson's blog</a></li>
                    </ul>
                </div>
                <div class="lista">
                    <h4>Need Help?</h4>
                    <ul>
                        <li><a href="cms\Faq.php">FAQ</a></li>
                        <li><a href="Kontakt.php" onclick="con()">Crimson's Support</a></li>
                        <li><a href="Kontakt.php" onclick="con()">Contact Form</a></li>
                    </ul>
                </div>
                <div class="listap">
                    <h4>Payment Methods</h4>
                    <div class="ulp">
                        <a href=""><i class='bx bxl-visa'></i></a>
                        <a href=""><i class='bx bxl-mastercard' ></i></a>
                        <a href=""><i class='bx bxl-bitcoin' ></i></a>
                        <a href=""><i class='bx bxl-paypal' ></i></a>
                    </div>
                </div>
                <div class="lista">
                    <h4>Follow us</h4>
                    <div class="rrjetet">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
</footer>
</body>
</html>