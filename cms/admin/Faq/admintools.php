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

<div class="posts-view">
<?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="success-message">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="success-message">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="success-message">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
  ?>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th class="date">Publication Date</th>
            <th>Title</th>
            <th class="article">Article</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../../connect.php");
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn,$sqlSelect);
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
            <td class="date"><?php echo $data["date"]?></td>
            <td><?php echo $data["title"]?></td>
            <td class="article"><?php echo $data["summary"]?></td>
            <td>
                <a class="btn btn-info" href="view.php?id=<?php echo $data["id"]?>">View</a>
                <a class="btn btn-warning" href="edit.php?id=<?php echo $data["id"]?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>">Delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>