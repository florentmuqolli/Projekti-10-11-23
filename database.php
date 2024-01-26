<?php
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "projekti-10-11-23";
    $conn = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
    if (!$conn) {
        die("Something went wrong");
    }
?>