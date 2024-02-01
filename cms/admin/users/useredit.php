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
        <div class="create-form">
            <form action="userprocess.php" method="post">
                <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    include("../../connect.php");
                    $sqlEdit = "SELECT * FROM users WHERE id = $id";
                    $result = mysqli_query($conn,$sqlEdit);
                }else {
                    echo "User not found";
                }
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="full_name" value="<?php echo $data['full_name'];?>" placeholder="User's new full name:">
                </div>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="email" value="<?php echo $data['email'];?>" placeholder="User's new email:">
                </div>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="password" value="<?php echo $data['password'];?>" placeholder="User's new password:">
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