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
                    <a href="Aboutusi.php" class="dbrda2"><strong>Check About Us</strong></a>
                </div>
                <div class="menu">
                    <a href="abtcreate.php" class="dbrda2"><strong>Add New Post</strong></a>
                </div>
                <div class="menu">
                    <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
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

  <table class="tables tables-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th class="title">Title</th>
            <th class="summary">Summary</th>
            <th class="content">Content</th>
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        <?php
        include("../../connect.php");
        $sql = "SELECT * FROM aboutus";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td class="title"><?php echo $data["title"]; ?></td>
                <td class="summary"><?php echo $data["summary"]; ?></td>
                <td class="content"><?php echo $data["content"]; ?></td>
                <td>
                    <a class="btn btn-info" href="abtview.php?id=<?php echo $data["id"]?>">View</a>
                    <a class="btn btn-warning" href="abtedit.php?id=<?php echo $data["id"]?>">Edit</a>
                    <a class="btn btn-danger" href="abtdelete.php?id=<?php echo $data["id"]?>">Delete</a>
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