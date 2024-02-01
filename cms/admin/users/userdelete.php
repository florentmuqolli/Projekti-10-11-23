<?php
$id = $_GET["id"];
if($id){
include("../../connect.php");
$sqlDelete = "DELETE FROM users WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "User deleted successfully";
    header("Location: usercrud.php");
}else{
    die("Something went wrong. User is not deleted");
}
}else{
    echo "User not found";
}
?>