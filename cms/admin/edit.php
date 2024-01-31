<?php
include("headfoot/header.php");
?>

<?php
    $id = $_GET["id"];
    if ($id) {
        include("../connect.php");
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
        <?php
include("headfoot/footer.php");
?>