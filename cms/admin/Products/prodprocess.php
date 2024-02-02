<?php
session_start();
include("../../connect.php");
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if(isset($_POST["create"])){
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder ='prodimg/'.$file_name;
        $sql = "INSERT INTO products (author,name,image) VALUES ('$author','$name','$file_name')";
        $result = mysqli_query($conn,$sql);
        if (move_uploaded_file($tempname, $folder)) {
            if($result){
                header("Location: prodcrud.php");
                session_start();
                $_SESSION["create"] = "Product added successfully";
            }
            else{
                die("Something went wrong!");
            }
        }
    }
}
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if(isset($_POST["update"])){
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $file_name = $_FILES['image']['name'];
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $tempname = $_FILES['image']['tmp_name'];
        $folder ='prodimg/'.$file_name;
        $sql = "UPDATE products SET author = '$author', name = '$name', image = '$file_name' WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        if (move_uploaded_file($tempname, $folder)) {
            if($result){
                header("Location: prodcrud.php");
                session_start();
                $_SESSION["update"] = "Product updated successfully";
            }
            else{
                die("Something went wrong!");
            }
        }
    }
}
?>  