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
        <a href="skeletura-main.php" > Home</a>
        <a href="Aboutusi.php"> About Us</a>
        <a href="Kontakt.php" class="kontaktona"> Contact</a>
        <a href="cms\Faq.php"> FAQ</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>
<body>
    <div class="headi">
        <h1>One More Step (:</h1>
    </div>
    <div class="fieldat">
        <fieldset class="skeleton">
            <legend>Skeleten Knife</legend>
           <p><b>Description:</b> It has been painted using a spider web-patterned 
            hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
            <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                <p><b>Finish Style:</b> Hydrographic</p>
                <p><b>Added:</b> 19 November 2019</p>
                <p><b>Update:</b> Operation Shattered Web</p>
                <select name="Buy" id="Buy">
                    <option value="MW">MW</option>
                    <option value="FT">FT</option>
                    <option value="FN">FN</option>
                </select>
                <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Nomad">
            <legend>Nomad Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 19 November 2019</p>
                    <p><b>Update:</b> Operation Shattered Web</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Paracord">
            <legend>Paracord Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 19 November 2019</p>
                    <p><b>Update:</b> Operation Shattered Web</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Survival">
            <legend>Survival Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 19 November 2019</p>
                    <p><b>Update:</b> Operation Shattered Web</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Classic">
            <legend>Classic Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 18 October 2019</p>
                    <p><b>Update:</b> Cache and Release</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Talon">
            <legend>Talon Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 3 August 2018</p>
                    <p><b>Update:</b> A New Horizon</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Stiletto">
            <legend>Stiletto Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 3 August 2018</p>
                    <p><b>Update:</b> A New Horizon</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Ursus">
            <legend>Ursus Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 3 August 2018</p>
                    <p><b>Update:</b> A New Horizon</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Navaja">
            <legend>Navaja Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 3 August 2018</p>
                    <p><b>Update:</b> A New Horizon</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Bowie">
            <legend>Bowie Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 18 February 2016</p>
                    <p><b>Update:</b> Operation Wildfire</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Shadow">
            <legend>Shadow Daggers</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 17 September 2015</p>
                    <p><b>Update:</b> Shadow Boxing</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Falchion">
            <legend>Falchion Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 26 May 2015</p>
                    <p><b>Update:</b> Operation Bloodhound</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Butterfly">
            <legend>Butterfly Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 1 July 2014</p>
                    <p><b>Update:</b> Operation Breakout</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Huntsman">
            <legend>Huntsman Knife</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 1 May 2014</p>
                    <p><b>Update:</b> The Hunt Begins</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Deagle">
            <legend>Deagle</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 10 July 2014</p>
                    <p><b>Creator:</b> Valve</p>
                    <p><b>Update:</b> Summer is heating up</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Revolver">
            <legend>R8 Revolver</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 8 December 2015</p>
                    <p><b>Creator:</b> Valve</p>
                    <p><b>Update:</b> CS:GO's Winter Update</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
        <fieldset class="Scar-20">
            <legend>Scar-20</legend>
            <p><b>Description:</b> It has been painted using a spider web-patterned 
                hydrographic over a red base coat and finished with a semi-gloss topcoat.</p>
                <p><b>Flavor Text:</b> Be careful where you walk, you never know where the web is spread</p>
                    <p><b>Finish Style:</b> Hydrographic</p>
                    <p><b>Added:</b> 8 November 2013</p>
                    <p><b>Creator:</b> Valve</p>
                    <p><b>Update:</b> The Arms Deal 2</p>
                    <select name="Buy" id="Buy">
                        <option value="MW">MW</option>
                        <option value="FT">FT</option>
                        <option value="FN">FN</option>
                    </select>
                    <button class="blerja" onclick="checkouti()">Checkout</button>
        </fieldset>
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
                        <li><a href="Kontakt.php">Crimson's Support</a></li>
                        <li><a href="Kontakt.php">Contact Form</a></li>
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


    <script src="js\Detajet.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>