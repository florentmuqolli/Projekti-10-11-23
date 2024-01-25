<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crimsons</title>
    <link rel="stylesheet" href="Kontakt.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
    <!--<img class="crimson" src="img/600px-Crimson2_logo.png" width="10%" alt="logojoja">-->
    <nav class="ubt">
        <a href="skeletura-main.php"> Home</a>
        <a href="Aboutusi.php">About Us</a>
        <a href="Kontakt.php" class="kontaktona"> Contact</a>
        <a href="Faq.php"> FAQ</a>
        <!--<ul>
            <li><span><ion-icon name="home-outline"></ion-icon></span><a href="#"> Home</a></li>
            <li><span><ion-icon name="information-circle-outline"></ion-icon></span> <a href="#footeri">About Us</a></li> 
            <li><span><ion-icon name="call-outline"></ion-icon></span><a href="#" class="kontaktona" onclick="con()"> Contact</a></li> 
            <li><span><ion-icon name="person-circle-outline"></ion-icon></span><a href="#"> Profile</a></li>
        </ul>-->
    </nav>
</header>

<body>
    <div class="conus">
        <h1>Contact US!</h1> <br> <P>
            Would you like to quickly and conveniently ask us a question, request a quote, or ask a question about your order?
            No problem. You are right here. <br> <br>
            
            <p class="aaa">Have you already made a request and received a processing number?</p> <br>
            First, please check your email inbox. We sent you an email regarding your request. You can recognize this by the # or ASP- (e.g. #123456 / ASP-123456) in the subject of our email. If you have any further questions, please reply to this email so that we can respond to your request more quickly. A new request via the contact form may delay the processing of your request.
            
            <p class="aaa" style="margin-right: 50%;">Here is how you contact us via email or phone number.</p> <br>
            <p>We have provided two ways to frequently answer your questions here. Contact us via email  :<a href="#" style="color: red; font-size: large; padding: 0 5px 0 5px;">crimsons@gmail.com</a> or via phone number <a href="#" style="color: red;">049-553-279</a></P>
            

        <div class="formulari">
            <div class="formulari1"> <p>First name</p><input type="text" placeholder=" First name" class="formulari2"></div>
            <div class="formulari1"><p>Last name</p><input type="text" placeholder=" Last name" class="formulari2"></div>
            <div class="formulari1"><p>Costumer Number</p><input type="text" placeholder=" Costumer number" class="formulari2"></div>
            <div class="formulari1"><p>Order Number</p><input type="text" placeholder=" Order number" class="formulari2"></div>
            <div class="formulari1"><p>Email</p><input type="email" placeholder=" Email" class="formulari2"></div>
            <div class="formulari1"><p>Phone Number</p><input type="text" placeholder=" Phone number" class="formulari2"></div>
            <div class="formulari1"><input type="submit" class="submiti" onclick="submiti()"></div>
        </div>
        <div class="Koment"><p style="margin-bottom: -10px; margin-top: 30px;">Comment</p><textarea cols="80" rows="10" class="Koment" type="text" name="textbox" placeholder="Add your comment here before you submit your request"></textarea></div>

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
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Crimson's Support</a></li>
                        <li><a href="">Contact Form</a></li>
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


<script src="Kontakt.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>