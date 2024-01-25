<html>
    <head>
        <title>Crimsons</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <header>
            <h2 class="crimson">Crimson</h2>
            <button class="kycja">Login</button>
        </header>

        <div class="textet">
            <h1 class="texti">Welcome to our CS:2 Crimsons Skins, 
                where gaming meets style! 
                Dive into the world of Counter-Strike:2 
                with our extensive collection of skins that will 
                elevate your in-game experience to a whole new level.
            </h1>
            <h1 class="texti2">Ready to dive into the action? Click that login button 
                now and step into a world of your favorite skins. If you're not logged in already, 
                right in the Login, you'll find the gateway to registration.</h1>
        </div>      
    <div class="boxi">
        <span class="hekenX"><ion-icon name="close"></ion-icon></span>
        <div class="lgforma login">
            <h2>Login</h2>
            <form id="logini">
                <div class="inputi_forms">
                    <span class="ikona"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" id="email" class="inputi">
                    <label>Email</label>
                    <div class="gabiminemail" id="emailgabim"></div>
                </div>
                <div class="inputi_forms">
                    <span class="ikona"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="passi" class="inputi">
                    <label>Password</label>
                    <div class="gabiminpass" id="passigabim"></div>
                </div>
                <div class="remember_me">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="button" class="loginbutoni" onclick="kyciratu()">Login</button>
                <div class="skiacc">
                    <p>Don't have an account? <a href="#" class="reglinki">Register</a></p>
                </div>
            </form>
        </div>

        <div class="lgforma register">
            <h2>Register</h2>
            <form id="logini">
                <div class="inputi_forms">
                    <span class="ikona"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="emri" class="inputi">
                    <label>Username</label>
                    <div class="gabiminemer" id="emrigabim"></div>
                </div>
                <div class="inputi_forms">
                    <span class="ikona"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" id="emailr" class="inputi">
                    <label>Email</label>
                    <div class="gabiminemail" id="emailgabimr"></div>
                </div>
                <div class="inputi_forms">
                    <span class="ikona"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="passir" class="inputi">
                    <label>Password</label>
                    <div class="gabiminpass" id="passigabimr"></div>
                </div>
                <div class="remember_me">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                    
                </div>
                <button type="button" class="loginbutoni" onclick="registeratu()">Register</button>
                <div class="skiacc">
                    <p>Already have an account? <a href="#" class="loginlinki">Login</a></p>
                </div>
        </div>
            </form>
    </div>

         <script src="Skeletura.js"></script>
         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    
</html>