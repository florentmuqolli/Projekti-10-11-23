<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: Products/skeletura-main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <a href="Products/">Products</a>
        <a href="Abt/Aboutusi.php" >About Us</a>
        <a href="Kontakt.php" class="kontaktona"> Contact</a>
        <a href="Faq\Faq.php"> FAQ</a>
    </nav>
</header>
<body>
    <img src="../../img\event_banner_csgo_left.webp" alt="event_banner_csgo_left" class="event_banner_csgo_left">
    <img src="../../img\home-logo.webp" alt="home-logo" class="home-logo">
    <img src="../../img\event_banner_csgo_right.webp" alt="event_banner_csgo_right" class="event_banner_csgo_right">
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "../connect.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if ($password == $user["password"]) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: Products/skeletura-main.php");
                    die();
                }else{
                    echo "<div class='error-message'>Password is incorrect</div>";
                }
            }else{
                echo "<div class='error-message'>Email is incorrect </div>";
            }
        }
        ?>
        <form action="userlogin.php" method="post">
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
        <div class="reghere"><p>Not registered yet? <a href="register.php">Register Here</a></p></div>
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
                        <li><a href="Faq\Faq.php">FAQ</a></li>
                        <li><a href="Contactus/Kontakt.php" onclick="con()">Crimson's Support</a></li>
                        <li><a href="Contactus/Kontakt.php" onclick="con()">Contact Form</a></li>
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