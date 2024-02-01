<?php
$id = $_GET["id"];
if($id){
include("../../connect.php");
$sqlDelete = "DELETE FROM contactus WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "Data deleted successfully";
    header("Location: concrud.php");
}else{
    die("Something went wrong. Data is not deleted");
}
}else{
    echo "User not found";
}
?>