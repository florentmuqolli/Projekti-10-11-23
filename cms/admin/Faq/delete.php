<?php
$id = $_GET["id"];
if($id){
include("../../connect.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "Post deleted successfully";
    header("Location:admintools.php");
}else{
    die("Something went wrong. Data is not deleted");
}
}else{
    echo "Post not found";
}
?>