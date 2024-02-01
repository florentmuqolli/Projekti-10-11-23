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
            <h1 class="dbrd"><a href="abtcrud.php" class="dbrda">Dashboard</a></h1>
            <div class="menues">
                <div class="menu">
                    <a href="../cms/admin/Faq/admintools.php" class="dbrda2"><strong>FAQ's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../cms\admin\Details\detcrud.php" class="dbrda2"><strong>Details's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../cms\admin\Products\prodcrud.php" class="dbrda2"><strong>Products CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../users\usercrud.php" class="dbrda2"><strong>User's CRUD</strong></a>
                </div>
                <div class="menu">
                <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
                </div>
        </div>
    </div>
        <div class="create-form">
            <form action="abtprocess.php" method="post">
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="title" placeholder="Title:">
                </div>
                <div class="form-field">
                    <textarea name="summary" class="form-ctrl" id="" cols="30" rows="10" placeholder="Summary:"></textarea>
                </div>
                <div class="form-field">
                    <textarea name="content" class="form-ctrl" id="" cols="30" rows="10" placeholder="Content:"></textarea>
                </div>
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Post" name="create">
                </div>
            </form>
        </div>
    </div>
</body>
</html>