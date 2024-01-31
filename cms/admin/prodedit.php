<?php
include("headfoot/header.php");
?>
        <div class="create-form">
            <form action="prodprocess.php" method="post">

                <?php

                
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    include("../connect.php");
                    $sqlEdit = "SELECT * FROM products WHERE id = $id";
                    $result = mysqli_query($conn,$sqlEdit);
                }else {
                    echo "Post not found";
                }
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="name" value="<?php echo $data['name'];?>" placeholder="Product name:">
                </div>
                <div class="form-field">
                    <input type="file" class="form-ctrl" name="image" <?php echo $data['image'];?> accept=".jpg, .jpeg, .png" placeholder="Product's image:">
                </div>
                <div class="form-field">
                    <textarea name="description" class="form-ctrl" id="" cols="30" rows="10" placeholder="Product's Description:"><?php echo $data['description'];?></textarea>
                </div>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="price" placeholder="Price:" <?php echo $data['price'];?>>
                </div>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Update" name="updatep">
                </div>
                <?php
                }
                ?>
            </form>
        </div>
        <?php
include("headfoot/footer.php");
?>