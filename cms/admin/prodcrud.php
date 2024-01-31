<?php
include("headfoot/header.php");
?>

<div class="posts-view">
<?php
        if (isset($_SESSION["createp"])) {
        ?>
        <div class="success-message">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["createp"]);
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

  <table class="tables table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>  
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        <?php
        include("../connect.php");
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $data["id"]; ?></td>
                <td><?php echo $data["name"]; ?></td>
                <td><?php echo $data["image"]; ?></td>
                <td><?php echo $data["description"]; ?></td>
                <td><?php echo $data["price"]; ?></td>
                <td>
                    <a class="btn btn-info" href="prodview.php?id=<?php echo $data["id"]?>">View</a>
                    <a class="btn btn-warning" href="prodedit.php?id=<?php echo $data["id"]?>">Edit</a>
                    <a class="btn btn-danger" href="proddelete.php?id=<?php echo $data["id"]?>">Delete</a>
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