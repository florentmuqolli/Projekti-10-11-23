<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="Faq.css">
</head>
<body>
    <header>
        <a href="Faq.php"><h1>Crimson's Faq</h1></a>
    </header>
    <div class="post-list">
        <div class="container">
            <?php
                include("../../connect.php");
                $sqlSelect = "SELECT * FROM posts";
                $result = mysqli_query($conn,$sqlSelect);
                while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="row">
                <div class="col col-2">
                    <?php echo $data["date"];?>
                </div>
                <div class="col col-3">
                    <h2><?php echo $data["title"];?></h2>
                </div>
                <div class="col col-4">
                    <?php echo $data["summary"];?>
                </div>
                <div class="col col-5">
                    <a href="viewaf.php?id=<?php echo $data["id"];?>" class="btn btn-primary">READ MORE</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="footer">
        <a href="admintools.php">Admin Panel</a>
    </div>
</body>
</html>