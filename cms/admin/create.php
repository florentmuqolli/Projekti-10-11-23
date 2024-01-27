<?php
include("headfoot/header.php");
?>
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
        <?php
include("headfoot/footer.php");
?>