<?php
include("../../connect.php");
session_start();
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if(isset($_POST["create"])){
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $image = mysqli_real_escape_string($conn, $_POST["image"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);
        $price = mysqli_real_escape_string($conn, $_POST["price"]);
        $sql = "INSERT INTO details (author,name, image, description, price) VALUES ('$author','$name','$image','$description','$price')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: detcrud.php");
            session_start();
            $_SESSION["create"] = "Product added successfully";
        }
        else{
            die("Something went wrong!");
        }
    }
}
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if(isset($_POST["update"])){
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $image = mysqli_real_escape_string($conn, $_POST["image"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);
        $price = mysqli_real_escape_string($conn, $_POST["price"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $sql = "UPDATE details SET author = '$author', name = '$name', image = '$image', description = '$description', price = '$price' WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: detcrud.php");
            session_start();
            $_SESSION["update"] = "Product updated successfully";
        }
        else{
            die("Something went wrong!");
        }
    }
}
?>  