<?php
include("headfoot/header.php");
?>
        <div class="create-form">
            <form action="prodprocess.php" method="post">
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="name" placeholder="Product name:">
                </div>
                <div class="form-field">
                    <input type="file" class="form-ctrl" name="image" accept=".jpg, .jpeg, .png" placeholder="Product's image:">
                </div>
                <div class="form-field">
                    <textarea name="description" class="form-ctrl" id="" cols="30" rows="10" placeholder="Product's Description:"></textarea>
                </div>
                <div class="form-field">
                    <input type="text" class="form-ctrl" name="price" placeholder="Price:">
                </div>
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Add Product" name="createp">
                </div>
            </form>
        </div>
        <?php
include("headfoot/footer.php");
?>