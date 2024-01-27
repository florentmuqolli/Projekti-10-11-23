<?php
if (isset($_POST["create"])) {
    include("../connect.php");
    $title = $_POST["title"];
    $summary = $_POST["summary"];
    $content = $_POST["content"];
    $date = $_POST["date"];

    $sqlInsert = "INSERT INTO posts(date, title, summary, content) VALUES ('$date','$title','$summary','$content')";
    if (mysqli_query($conn,$sqlInsert)) {
        header("Location: admintools.php");
    }else {
        die("data is not inserted right.");
    }
}
?>

<?php
if (isset($_POST["update"])) {
    include("../connect.php");
    $title = $_POST["title"];
    $summary = $_POST["summary"];
    $content = $_POST["content"];
    $date = $_POST["date"];
    $id = $_POST["id"];
    $sqlUpdate = "UPDATE posts SET title = '$title', summary = '$summary', content = '$content', date = 'date' WHERE id = $id";
    if (mysqli_query($conn,$sqlUpdate)) {
        header("Location: admintools.php");
    }else {
        die("data is not updated.");
    }
}
?>