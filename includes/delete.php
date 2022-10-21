<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "niceadmin");

    $delid=$_GET['delete_id'];

    $query="DELETE FROM `users` WHERE id='$delid'";

    $mysqli->query("$query");

    header("location: ../users.overview.php");

 ?>
