<?php
session_start();
session_destroy();
header("Location: loginperadmin.php");
?>