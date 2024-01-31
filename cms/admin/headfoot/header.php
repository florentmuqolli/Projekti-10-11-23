<?php
session_start();
if (!isset($_SESSION["user2"])) {
   header("Location: loginperadmin.php");
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
        <h1 class="dbrd"><a href="admintools.php" class="dbrda">Dashboard</a></h1>
        <div class="menues">
            <div class="menu">
                <a href="create.php" class="dbrda2"><strong>Add New Post</strong></a>
            </div>
            
            <div class="menu">
                <a href="../Faq.php" class="dbrda2"><strong>View FAQ's website</strong></a>
            </div>
            <div class="menu">
                <a href="admintools.php" class="dbrda2"><strong>FAQ's CRUD</strong></a>
            </div>
            <div class="menu">
                <a href="prodcreate.php" class="dbrda2"><strong>Add New Product</strong></a>
            </div>
            <div class="menu">
                <a href="prodcrud.php" class="dbrda2"><strong>Product's CRUD</strong></a>
            </div>
            <div class="menu">
                <a href="../../skeletura-main.php" class="dbrda2"><strong>Check products stock</strong></a>
            </div>
            <div class="menu">
                <a href="logout.php" class="logout"><strong>Log out</strong></a>
            </div>
            
        </div>
        </div>