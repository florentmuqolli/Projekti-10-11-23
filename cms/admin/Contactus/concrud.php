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
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h1 class="dbrd"><a href="concrud.php" class="dbrda">Dashboard</a></h1>
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
                    <a href="../Abt/Aboutusi.php" class="dbrda2"><strong>About Us CRUD</strong></a>
                </div>
                <div class="menu">
                    <a href="Kontakt.php" class="dbrda2"><strong>Check Conctact Us</strong></a>
                </div>
                <div class="menu">
                    <a href="../adminlogout.php" class="logout"><strong>Log out</strong></a>
            </div>
        </div>
    </div>

<div class="posts-view">
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
            <th class="firstname">First name</th>
            <th class="lastname">Last name</th>
            <th class="email">Email</th>
            <th class="comment">Comment</th>
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        <?php
        include("../../connect.php");
        $sql = "SELECT * FROM contactus";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td class="firstname"><?php echo $data["firstname"]; ?></td>
                <td class="lastname"><?php echo $data["lastname"]; ?></td>
                <td class="email"><?php echo $data["email"]; ?></td>
                <td class="comment"><?php echo $data["comment"]; ?></td>
                <td>
                    <a class="btn btn-info" href="conview.php?id=<?php echo $data["id"]?>">View</a>
                    <a class="btn btn-danger" href="condelete.php?id=<?php echo $data["id"]?>">Delete</a>
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