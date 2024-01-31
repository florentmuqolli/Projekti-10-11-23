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
        <div class="create-form">
            <form action="process.php" method="post">
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="title" id="" placeholder="Enter title:">
                </div>
                <div class="form-field">
                    <textarea name="summary" class="form-ctrl" id="" cols="30" rows="10" placeholder="Enter summary:"></textarea>
                </div>
                <div class="form-field">
                    <textarea name="content" class="form-ctrl" id="" cols="30" rows="10" placeholder="Enter content:"></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("Y/m/d");?>">
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Post" name="create">
                </div>
            </form>
        </div>
    </div>
</body>
</html>