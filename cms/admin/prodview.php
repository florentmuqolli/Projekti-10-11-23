<?php
include("headfoot/header.php");
?>

<div class="post">
    <?php
    $id = $_GET["id"];
    if ($id) {
        include("../connect.php");
        $sqlSelectPost = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($conn, $sqlSelectPost);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <h1><?php echo $data['name'];?></h1>
            <p><?php echo $data['image'];?></p>
            <p><?php echo $data['description'];?></p>
            <p><?php echo $data['price'];?></p>
            <?php
        }
    }else {
        echo "Post not found";
    }
    ?>
</div>

<?php
include("headfoot/footer.php");
?>