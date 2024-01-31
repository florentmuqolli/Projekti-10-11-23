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
                <a href="../Details/detcreate.php" class="dbrda2"><strong>Add New Details</strong></a>
            </div>
            <div class="menu">
                <a href="../../../Detajet.php" class="dbrda2"><strong>Check Details</strong></a>
            </div>
            <div class="menu">
                <a href="../logout.php" class="logout"><strong>Log out</strong></a>
            </div>
            
        </div>
        </div>

<div class="post">
    <?php
    $id = $_GET["id"];
    if ($id) {
        include("../../connect.php");
        $sqlSelectPost = "SELECT * FROM details WHERE id = $id";
        $result = mysqli_query($conn, $sqlSelectPost);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <h1><?php echo $data['name'];?></h1>
            <p><?php echo $data['image'];?></p>
            <p><?php echo $data['description'];?></p>
            <p><?php echo $data['price'];?></p>
            <?php
        }
    }else {
        echo "Post not found";
    }
    ?>
</div>
</div>
</body>
</html>