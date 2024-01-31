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
        <h1 class="dbrd"><a href="admintools.php" class="dbrda">Dashboard</a></h1>
        <div class="menues">
            <div class="menu">
                <a href="create.php" class="dbrda2"><strong>Add New Post</strong></a>
            </div>
            <div class="menu">
                <a href="Faq.php" class="dbrda2"><strong>View FAQ's website</strong></a>
            </div>
            <div class="menu">
                <a href="../Details/detcrud.php" class="dbrda2"><strong>Details CRUD</strong></a>
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
        $sqlSelectPost = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($conn, $sqlSelectPost);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <h1><?php echo $data['title'];?></h1>
            <p><?php echo $data['date'];?></p>
            <p><?php echo $data['content'];?></p>
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