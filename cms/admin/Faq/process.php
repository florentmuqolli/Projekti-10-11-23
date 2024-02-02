<?php
include("../../connect.php");
session_start();
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if (isset($_POST["create"])) {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
        $content = mysqli_real_escape_string($conn, $_POST["content"]);
        $date = mysqli_real_escape_string($conn, $_POST["date"]);
        $sqlInsert = "INSERT INTO posts(author,date,title, summary, content) VALUES ('$author','$date', '$title', '$summary','$content')";
        if(mysqli_query($conn, $sqlInsert)){
            session_start();
            $_SESSION["create"] = "Post added successfully";
            header("Location:admintools.php");
        }else{
            die("Data is not inserted!");
        }
    }
}
?>

<?php
if (isset($_SESSION["user2"])) {
    $author = $_SESSION["user2"];
    if (isset($_POST["update"])) {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
        $content = mysqli_real_escape_string($conn, $_POST["content"]);
        $date = mysqli_real_escape_string($conn, $_POST["date"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $sqlUpdate = "UPDATE posts SET author = '$author', title = '$title', summary = '$summary', content = '$content', date = '$date' WHERE id = $id";
        if(mysqli_query($conn, $sqlUpdate)){
            session_start();
            $_SESSION["update"] = "Post udpated successfully";
            header("Location:admintools.php");
        }else{
            die("Data is not updated!");
        }
    }
}
?>