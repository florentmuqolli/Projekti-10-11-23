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
                 <a href="../Faq/admintools.php" class="dbrda2"><strong>FAQ's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Details\detcrud.php" class="dbrda2"><strong>Details's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../users\usercrud.php" class="dbrda2"><strong>User's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Products\prodcrud.php" class="dbrda2"><strong>Products CRUD</strong></a>
                </div>
            <div class="menu">
                <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
            </div>
            
        </div>
        </div>
        <div class="create-form">
            <form action="abtprocess.php" method="post">
                <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    include("../../connect.php");
                    $sqlEdit = "SELECT * FROM aboutus WHERE id = $id";
                    $result = mysqli_query($conn,$sqlEdit);
                }else {
                    echo "Post not found";
                }
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="title" value="<?php echo $data['title'];?>" placeholder="New Title:">
                </div>
                <div class="form-field">
                    <textarea name="summary" class="form-ctrl" id="" cols="30" rows="10" placeholder="New Summary:"><?php echo $data['summary'];?></textarea>
                </div>
                <div class="form-field">
                    <textarea name="content" class="form-ctrl" id="" cols="30" rows="10" placeholder="New Content:"><?php echo $data['content'];?></textarea>
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