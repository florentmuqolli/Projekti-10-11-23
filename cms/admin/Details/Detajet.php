<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: ../userlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crimson's</title>
    <link rel="stylesheet" href="Detajet.css">
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
        <a href="../Products\skeletura-main.php" > Home</a>
        <a href="../Abt\Aboutusi.php"> About Us</a>
        <a href="../Contactus/Kontakt.php" class="kontaktona"> Contact</a>
        <a href="../Faq\Faq.php"> FAQ</a>
        <a href="../userlogout.php">Logout</a>
    </nav>
</header>
<body>
    <div class="headi">
        <h1>One More Step (:</h1>
    </div>
        <?php
        include("../../connect.php");
        $sqlSelect = "SELECT * FROM details";
        $result = mysqli_query($conn, $sqlSelect);
        while ($data = mysqli_fetch_array($result)) {
        ?>
        <div class="content">
            <section class="about">
                <div class="about-img">
                    <img src="detimg/<?php echo $data["image"];?>">
                </div>
                <div class="about-content">
                <h2><?php echo $data["name"]?></h2>
                <p><?php echo $data["description"];?></p>
                <p><?php echo $data["price"];?></p>
                <a href="" class="buy-now" onclick="checkouti()">Buy Now</a>
                </div>
            </section>
        </div>
        <?php
        }
        ?>
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
                        <li><a href="../Faq\Faq.php">FAQ</a></li>
                        <li><a href="../Contactus/Kontakt.php">Crimson's Support</a></li>
                        <li><a href="../Contactus/Kontakt.php">Contact Form</a></li>
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


    <script src="Detajet.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>