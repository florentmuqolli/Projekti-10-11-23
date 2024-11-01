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
                    <a href="../users\usercrud.php" class="dbrda2"><strong>User's CRUD</strong></a>
            </div>
            <div class="menu">
                    <a href="../Abt/abtcrud.php" class="dbrda2"><strong>About's CRUD</strong></a>
            </div>
            <div class="menu">
                <a href="prodcreate.php" class="dbrda2"><strong>Add New Product</strong></a>
            </div>
            <div class="menu">
                <a href="skeletura-main.php" class="dbrda2"><strong>Check Products</strong></a>
            </div>
            <div class="menu">
                <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
            </div>
            
        </div>
        </div>
        <div class="create-form">
            <form action="prodprocess.php" method="post" enctype="multipart/form-data">
                <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    include("../../connect.php");
                    $sqlEdit = "SELECT * FROM products WHERE id = $id";
                    $result = mysqli_query($conn,$sqlEdit);
                }else {
                    echo "Post not found";
                }
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="name" value="<?php echo $data['name'];?>" placeholder="Product name:">
                </div>
                <div class="form-field">
                    <input type="file" class="form-ctrl" name="image" value="<?php echo $data['image'];?>" placeholder="Product's image:">
                </div>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Update" name="update">
                </div>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>