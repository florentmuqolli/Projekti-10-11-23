<?php
include("../../connect.php");
if(isset($_POST["create"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $sql = "INSERT INTO aboutus (title, content, summary) VALUES ('$title','$content', '$summary')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: abtcrud.php");
        session_start();
        $_SESSION["create"] = "Post added successfully";
    }
    else{
        die("Something went wrong!");
    }
}

if(isset($_POST["update"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE aboutus SET title = '$title', content = '$content', summary = '$summary' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: abtcrud.php");
        session_start();
        $_SESSION["update"] = "Post updated successfully";
    }
    else{
        die("Something went wrong!");
    }
}
?>  