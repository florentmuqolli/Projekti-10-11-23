<?php
include("../connect.php");
if(isset($_POST["createp"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $sql = "INSERT INTO products (name, image, description, price) VALUES ('$name','$image','$description','price')";
    $result = mysqli_query($conn, $sql);
    if($result){
        session_start();
        $_SESSION["createp"] = "Product added successfully";
        header("Location: prodcrud.php");
    }
    else{
        die("Something went wrong!");
    }
}

if(isset($_POST["editp"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE products SET name = '$name', image = '$image', description = '$description', price = '$price' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        session_start();
        $_SESSION["updatep"] = "Product updated successfully";
        header("Location: prodcrud.php");
    }
    else{
        die("Something went wrong!");
    }
}
?>  