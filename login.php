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
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-ctrl" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-ctrl" placeholder="Password:">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" class="btn btn-primary" class="submit">
            </div>
            <div class="success-message">
                Your login was successful!
            </div>
        </form>
    </div>
</body>
</html>