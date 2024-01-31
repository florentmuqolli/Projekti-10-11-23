<?php
include("../../connect.php");
if(isset($_POST["create"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $sql = "INSERT INTO products (name, image) VALUES ('$name','$image')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: prodcrud.php");
        session_start();
        $_SESSION["create"] = "Product added successfully";
    }
    else{
        die("Something went wrong!");
    }
}

if(isset($_POST["update"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE products SET name = '$name', image = '$image' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: prodcrud.php");
        session_start();
        $_SESSION["update"] = "Product updated successfully";
    }
    else{
        die("Something went wrong!");
    }
}
?>  