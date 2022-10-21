<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "niceadmin");


  $id=$_GET['user_id'];


    $query = "SELECT id, fullName, about, company , job, country, users_email
              FROM users
              WHERE id = '$id'";
    $result = $mysqli->query("$query");
    $row = $result->fetch_assoc();
    /*
Full texts
users_id
fullName
about
company
job
country
users_email
users_password
*//************
printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
printf("name = %s (%s)\n", $row['fullName'], gettype($row['fullName']));
printf("company = %s (%s)\n", $row['company'], gettype($row['company']));
printf("job = %s (%s)\n", $row['job'], gettype($row['job']));
printf("country = %s (%s)\n", $row['country'], gettype($row['country']));
printf("email = %s (%s)\n", $row['users_email'], gettype($row['users_email']));
*/
 ?>


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Profile Show Details</h5>

    <div class="tab-pane fade show active profile-overview" id="profile-overview">
      <h5 class="card-title">About</h5>
      <p class="small fst-italic"><?php printf($row['about']);  ?></p>

      <h5 class="card-title">Profile Details</h5>

      <div class="row">
        <div class="col-lg-3 col-md-4 label ">Full Name</div>
        <div class="col-lg-9 col-md-8"><?php printf($row['fullName']);  ?></div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Company</div>
        <div class="col-lg-9 col-md-8"><?php printf($row['company']);  ?></div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Job</div>
        <div class="col-lg-9 col-md-8"><?php printf($row['job']);  ?></div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 label">Country</div>
        <div class="col-lg-9 col-md-8"><?php printf($row['country']);  ?></div>
      </div>


      <div class="row">
        <div class="col-lg-3 col-md-4 label">Email</div>
        <div class="col-lg-9 col-md-8"><?php printf($row['users_email']);  ?></div>
      </div>

    </div>

  </div>
</div><!-- End Default Card -->
