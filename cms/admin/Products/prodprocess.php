<?php
include("../../connect.php");
if(isset($_POST["create"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder ='prodimg/'.$file_name;
    $sql = "INSERT INTO products(name,image) VALUES ('$name','$file_name')";
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

if(isset($_POST["update"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $file_name = $_FILES['image']['name'];
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $tempname = $_FILES['image']['tmp_name'];
    $folder ='prodimg/'.$file_name;
    $sql = "INSERT INTO products(name,image) VALUES ('$name','$file_name')";
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
?>  