<?php
session_start();
if (!isset($_SESSION["user2"])) {
   header("Location: ../loginperadmin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
        <h1 class="dbrd"><a href="prodcrud.php" class="dbrda">Dashboard</a></h1>
        <div class="menues">
            <div class="menu">
                <a href="../Faq/admintools.php" class="dbrda2"><strong>FAQ's CRUD</strong></a>
            </div>
            <div class="menu">
                <a href="../Details/detcrud.php" class="dbrda2"><strong>Details's CRUD</strong></a>
            </div>
            <div class="menu">
                <a href="../../../skeletura-main.php" class="dbrda2"><strong>Check Products</strong></a>
            </div>
            <div class="menu">
                <a href="../logout.php" class="logout"><strong>Log out</strong></a>
            </div>
            
        </div>
        </div>
        <div class="create-form">
            <form action="prodprocess.php" method="post">
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="name" placeholder="Product name:">
                </div>
                <div class="form-field">
                    <input type="file" class="form-ctrl" name="image" placeholder="Product's image:">
                </div>
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Add Product" name="create">
                </div>
            </form>
        </div>
    </div>
</body>
</html>