<?php
include("headfoot/header.php");
?>

<div class="posts-view">
<?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="success-message">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="success-message">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
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
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Publication Date</th>
            <th>Title</th>
            <th>Article</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../connect.php");
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn,$sqlSelect);
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
            <td><?php echo $data["date"]?></td>
            <td><?php echo $data["title"]?></td>
            <td><?php echo $data["summary"]?></td>
            <td>
                <a class="btn btn-info" href="view.php?id=<?php echo $data["id"]?>">View</a>
                <a class="btn btn-warning" href="edit.php?id=<?php echo $data["id"]?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>">Delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include("headfoot/footer.php");
?>