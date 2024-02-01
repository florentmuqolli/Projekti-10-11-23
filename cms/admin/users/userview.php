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
    <link rel="stylesheet" href="users.css">
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h1 class="dbrd"><a href="usercrud.php" class="dbrda">Dashboard</a></h1>
            <div class="menues">
                <div class="menu">
                    <a href="../Faq/admintools.php" class="dbrda2"><strong>FAQ's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Details\detcrud.php" class="dbrda2"><strong>Details's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Products\prodcrud.php" class="dbrda2"><strong>Products CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Abt\abtcrud.php" class="dbrda2"><strong>About's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
                </div>
            </div>
        </div>

<div class="post">
    <?php
    $id = $_GET["id"];
    if ($id) {
        include("../../connect.php");
        $sqlSelectPost = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sqlSelectPost);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <h1><?php echo $data['full_name'];?></h1>
            <p><?php echo $data['email'];?></p>
            <p><?php echo $data['password'];?></p>
            <?php
        }
    }else {
        echo "User not found";
    }
    ?>
</div>
</div>
</body>
</html>