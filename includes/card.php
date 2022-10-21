<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "niceadmin");


    $id=$_GET['user_id'];
    //'$id'

    $query = "SELECT image, fullName, job
              FROM users
              WHERE id = '$id'";
    $result = $mysqli->query("$query");
    $row = $result->fetch_assoc();

 ?>
<div class="card">
  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

    <img src="<?php printf($row['image']);  ?>" alt="Profile" class="rounded-circle">
    <h2><?php printf($row['fullName']);  ?></h2>
    <h3><?php printf($row['job']);  ?></h3>
    <div class="social-links mt-2">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</div>
