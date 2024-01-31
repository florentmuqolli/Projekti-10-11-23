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
                $id = $_GET['id'];
                if ($id) {
                    include("../../connect.php");
                    $sqlSelect = "SELECT * FROM posts WHERE id = $id";
                    $result = mysqli_query($conn,$sqlSelect);
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                       <div class="post">
                        <h1><?php echo $data['title']; ?></h1>
                        <p><?php echo $data['date']; ?> </p>
                        <p><?php echo $data['content']; ?> </p>
                       </div>
                    <?php
                    }
                }else{
                    echo "No post found";
                }
            ?>
         </div>
    </div>
    <div class="footer">
        <a href="admintools.php">Admin Panel</a>
    </div>
</body>
</html>