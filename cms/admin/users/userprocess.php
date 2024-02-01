<?php
include("../../connect.php");
if(isset($_POST["create"])){
    $fullName = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$fullName','$email', '$password')";
    $result = mysqli_query($conn, $sql);
        if(strlen($password) < 7){
            die("Password must be at least 8 characters!");
        }
    if($result){
        header("Location: usercrud.php");
        session_start();
        $_SESSION["create"] = "User added successfully";
    }
    else{
        die("Something went wrong!");
    }
}

if(isset($_POST["update"])){
    $fullName = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE users SET full_name = '$fullName', email = '$email', password = '$password' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: usercrud.php");
        session_start();
        $_SESSION["update"] = "User updated successfully";
    }
    else{
        die("Something went wrong!");
    }
}
?>  