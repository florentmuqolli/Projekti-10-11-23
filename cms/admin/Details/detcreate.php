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
        <h1 class="dbrd"><a href="detcrud.php" class="dbrda">Dashboard</a></h1>
        <div class="menues">
            <div class="menu">
                <a href="../Faq/admintools.php" class="dbrda2"><strong>FAQ's CRUD</strong></a>
            </div>
            <div class="menu">
                    <a href="../Products/prodcrud.php" class="dbrda2"><strong>Product's CRUD</strong></a>
            </div>
            <div class="menu">
                    <a href="../users\usercrud.php" class="dbrda2"><strong>User's CRUD</strong></a>
            </div>
            <div class="menu">
                    <a href="../Abt/abtcrud.php" class="dbrda2"><strong>About's CRUD</strong></a>
            </div>
            <div class="menu">
                <a href="Detajet.php" class="dbrda2"><strong>Check Details</strong></a>
            </div>
            <div class="menu">
                <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
            </div>
            
        </div>
        </div>
        <div class="create-form">
            <form action="detprocess.php" method="post" enctype="multipart/form-data">
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="name" placeholder="Product name:">
                </div>
                <div class="form-field">
                    <textarea name="description" class="form-ctrl" id="" cols="30" rows="10" placeholder="Product's Description:"></textarea>
                </div>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="price" placeholder="Price:">
                </div>
                <div class="form-field">
                    <input type="file" class="form-ctrl" name="image" placeholder="Product's image:">
                </div>
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Add Details" name="create">
                </div>
            </form>
        </div>
    </div>
</body>
</html>