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
                    <a href="../Products/prodcrud.php" class="dbrda2"><strong>Product's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../users\usercrud.php" class="dbrda2"><strong>User's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Abt/abtcrud.php" class="dbrda2"><strong>About's CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="../Details/detcreate.php" class="dbrda2"><strong>Add New Details</strong></a>
                </div>
                <div class="menu">
                <a href="Detajet.php" class="dbrda2"><strong>Check Details</strong></a>
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
            <th>#</th>
            <th class="name">Name</th>
            <th class="image">Image</th>
            <th class="desc">Description</th>
            <th class="price">Price</th>  
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        <?php
        include("../../connect.php");
        $sql = "SELECT * FROM details";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td class="name"><?php echo $data["name"]; ?></td>
                <td class="image"><?php echo $data["image"]; ?></td>
                <td class="desc"><?php echo $data["description"]; ?></td>
                <td class="price"><?php echo $data["price"]; ?></td>
                <td>
                    <a class="btn btn-info" href="detview.php?id=<?php echo $data["id"]?>">View</a>
                    <a class="btn btn-warning" href="detedit.php?id=<?php echo $data["id"]?>">Edit</a>
                    <a class="btn btn-danger" href="detdelete.php?id=<?php echo $data["id"]?>">Delete</a>
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