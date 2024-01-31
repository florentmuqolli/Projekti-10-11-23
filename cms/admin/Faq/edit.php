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

<?php
    $id = $_GET["id"];
    if ($id) {
        include("../../connect.php");
        $sqlEdit = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($conn,$sqlEdit);
    }else {
        echo "Post not found";
    }
?>

        <div class="create-form">
            <form action="process.php" method="post">
                <?php
                while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="title" placeholder="Enter title:" value="<?php echo $data['title'];?>">
                </div>
                <div class="form-field">
                    <textarea name="summary" class="form-ctrl" id="" cols="30" rows="10" placeholder="Enter summary:"><?php echo $data['summary'];?></textarea>
                </div>
                <div class="form-field">
                    <textarea name="content" class="form-ctrl" id="" cols="30" rows="10" placeholder="Enter content:"><?php echo $data['content'];?></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>">
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