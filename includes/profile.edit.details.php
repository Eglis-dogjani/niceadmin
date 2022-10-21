<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "niceadmin");


    $id=$_GET['user_id'];


    $query = "SELECT id, fullName, about, company , job, country, users_email
              FROM users
              WHERE id = '$id'";
    $result = $mysqli->query("$query");
    $row = $result->fetch_assoc();


 ?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Profile Edit Details</h5>

    <form action="includes/update.php" method="post" enctype="multipart/form-data">
      <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
        <div class="col-md-8 col-lg-9">


                  <div class="col-sm-10">
                    <input class="form-control" name="userfile" type="file" id="formFile">
                  </div>

        </div>
      </div>

      <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
        <div class="col-md-8 col-lg-9">
          <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $row['fullName'] ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
        <div class="col-md-8 col-lg-9">
          <textarea name="about" class="form-control" id="about" style="height: 100px"><?php echo $row['about'] ?></textarea>
        </div>
      </div>

      <div class="row mb-3">
        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
        <div class="col-md-8 col-lg-9">
          <input name="company" type="text" class="form-control" id="company" value="<?php echo $row['company'] ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
        <div class="col-md-8 col-lg-9">
          <input name="job" type="text" class="form-control" id="Job" value="<?php echo $row['job'] ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
        <div class="col-md-8 col-lg-9">
          <input name="country" type="text" class="form-control" id="Country" value="<?php echo $row['country'] ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
        <div class="col-md-8 col-lg-9">
          <input name="email" type="email" class="form-control" id="Email" value="<?php echo $row['users_email'] ?>">
        </div>
      </div>

          <input type="hidden" name="form_id" value="<?php echo $row['id'] ?>">
        <button type="submit" class="btn btn-primary" name="update">Save Changes</button>
        <a href="includes/delete.php?delete_id=<?php echo $row['id'] ?>">
        <button type="button" class="btn btn-danger">
          Delete from User
        </button>
        </a>
        <?php echo "WHERE id= ".$row['id']." \n" ; ?>
      </div>
    </form><!-- End Profile Edit Form -->

  </div>
</div><!-- End Default Card -->
