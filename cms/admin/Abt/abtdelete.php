<?php
$id = $_GET["id"];
if($id){
include("../../connect.php");
$sqlDelete = "DELETE FROM aboutus WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "Post deleted successfully";
    header("Location: abtcrud.php");
}else{
    die("Something went wrong. User is not deleted");
}
}else{
    echo "User not found";
}
?>