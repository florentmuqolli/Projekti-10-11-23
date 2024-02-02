<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crimson's</title>
    <link rel="stylesheet" href="Skeletura-main.css">
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
        <a href="#">Home</a>
        <a href="../Abt/Aboutusi.php" >About Us</a>
        <a href="Kontakt.php" class="kontaktona"> Contact</a>
        <a href="../Faq\Faq.php"> FAQ</a>
        <a href="../userlogout.php">Logout</a>
    </nav>
</header>

<body>
    
<div class="top">
        <h1>CS-GO Crimson is now CS2 Crimson <br>Check out all the best deals on skins right now</h1>
    </div>


    <div class="container">
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-outlined">
                chevron_left
            </button>
            <div class="image-list">
                <img src="../../../img/maxresdefault (1).jpg" alt="img-1" class="image-item">
                <img src="../../../img/76u7xgcrkupa1.jpg" alt="img-2" class="image-item">
                <img src="../../../img/20190307120103_1.jpg" alt="img-3" class="image-item">
                <img src="../../../img/full-play-skins-kato-15-and-crimson-web-glove-knife-combo-v0-l5dx9350k26b1.png" alt="img-3" class="image-item">
                <img src="../../../img/maxresdefault-5-8-1024x576.jpg" alt="img-4" class="image-item">
                <img src="../../../img/Skeleton_Knife_Crimson_Web.webp" alt="img-5" class="image-item">
                <img src="../../../img/1-1.jpg" alt="img-6" class="image-item">
                <img src="../../../img/71042_TJQaKhfqCv_cs_go.jpg" alt="img-7" class="image-item">
                <img src="../../../img/20190307121906_1.jpg" alt="img-8" class="image-item">
            </div>
            <button id="next-slide" class="slide-button material-symbols-outlined">
                chevron_right
            </button>
        </div>
    </div>
    <h1 class="cr">CRIMSON WEB SKINS</h1>

    <?php
        include("../../connect.php");
        $result = mysqli_query($conn, "SELECT * FROM products");
        while ($row = mysqli_fetch_array($result)) {
    ?>
        <div class="Thikat">
            <div class="skins">
                <div class="rubrika">
                    <a href="../Details/Detajet.php"><img src="prodimg/<?php echo $row['image']?>" alt="" class="img"><?php echo $row['name'];?></a>
                </div>
            </div>
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


<script src="skeletura-main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<!--<div class="Thikat">
        <div class="skins">
            <div class="rubrika"> 
            <a href="Detajet.php"><img src="img/knife1.png" alt="" class="img">Skeleton Knife</a>
            </div>
        </div>


        <div class="skins">
            <div class="rubrika"> 
            <a href="Detajet.php"><img src="img/knife2.png" alt="" class="img">Nomad Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife3.png" alt="" class="img">Paracord Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife4.png" alt="" class="img">Survival Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife5.png" alt="" class="img">Classic Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife6.png" alt="" class="img">Talon Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife7.png" alt="" class="img">Stiletto Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife8.png" alt="" class="img">Ursus Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife9.png" alt="" class="img">Navaja Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife10.png" alt="" class="img">Bowie Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife11.png" alt="" class="img">Shadow Daggers</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife12.png" alt="" class="img">Falchion Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife13.png" alt="" class="img">Butterfly Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/knife14.png" alt="" class="img">Huntsman Knife</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/deagle.png" alt="" class="img">DEAGLE</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
            <a href="Detajet.php"><img src="img/sherif.png" alt="" class="img">R8 Revolver</a>
            </div>
        </div>
        <div class="skins">
            <div class="rubrika">
                <a href="Detajet.php"><img src="img/autosniper.png" alt="" class="img">SCAR-20</a>
            </div>
        </div>
    </div>-->