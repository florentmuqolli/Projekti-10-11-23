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
    <link rel="stylesheet" href="aboutusi.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<header> 
    <a href="#" class="crimson"> Crimson's</a>

    <input type="checkbox" id="check">
    <label for="check" class="ikonat">
        <i class='bx bx-menu' id="menu"></i>
        <i class='bx bx-x' id="close"></i>
    </label>
    <nav class="ubt">
        <a href="../Products\skeletura-main.php" onclick="hom()">Home</a>
        <a href="#">About Us</a>
        <a href="Kontakt.php" class="kontaktona" onclick="con()"> Contact</a>
        <a href="../Faq\Faq.php"> FAQ</a>
        <a href="../userlogout.php">Logout</a>
    </nav>
</header>
<body>
    <div class="heading">
        <h1>About Us</h1>
        <p>Crimson's is a well-known CS:GO (CS2) and Dota 2 case-opening website 
            with over six years of experience. You are much more likely to have 
            fun and gain from opening cases on Hellcase than the CS:GO (CS2) in-game cases.</p>
    </div>
                    <?php
                     include("../../connect.php");
                     $sqlSelect = "SELECT * FROM aboutus";
                     $result = mysqli_query($conn, $sqlSelect);
                     
                     while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <div class="permbajtja">
                        <section class="about">
                            <div class="about-img">
                                <img src="../../../img/event_banner_csgo_left.webp" alt="">
                            </div>
                            <div class="about-perm">
                                <h2><?php echo $data["title"];?></h2>
                                <p><?php echo $data["content"];?></p>
                                <a href="Aboutusi.php?id=<?php echo $data["id"]?>" class="read-more">Go Back</a>
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
                        <li><a href="../Contactus/Kontakt.php" >Crimson's Support</a></li>
                        <li><a href="../Contactus/Kontakt.php" >Contact Form</a></li>
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
<script>

</script>
</html>