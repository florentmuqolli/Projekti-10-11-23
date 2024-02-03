<?php
include("../../connect.php");
session_start();
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if(isset($_POST["create"])){
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);
        $price = mysqli_real_escape_string($conn, $_POST["price"]);
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder ='detimg/'.$file_name;
        $sql = "INSERT INTO details (author,name, image, description, price) VALUES ('$author','$name','$file_name','$description','$price')";
        $result = mysqli_query($conn, $sql);
        if (move_uploaded_file($tempname, $folder)) {
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
}
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if(isset($_POST["update"])){
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);
        $price = mysqli_real_escape_string($conn, $_POST["price"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder ='detimg/'.$file_name;
        $sqlUpdate = "UPDATE details SET author = '$author', name = '$name', image = '$file_name', description = '$description', price = '$price' WHERE id = $id";
        if (move_uploaded_file($tempname, $folder)) {
            if(mysqli_query($conn, $sqlUpdate)){
                header("Location: detcrud.php");
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