<div class="card pt-6">
  <?php
//  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  //    $mysqli = new mysqli("localhost", "root", "", "niceadmin");

      $id=$_GET['user_id'];
      //echo $id;

    //  $query = "SELECT id FROM users ORDER BY id DESC";
    //  $result = $mysqli->query("$query");
    //  $row = $result->fetch_assoc();
    //    echo $row['id'];


   ?>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-outline-dark">
        <a href="users.overview.php?user_id=<?php echo $id ?>">Overview</a>
      </button>
      <button type="button" class="btn btn-outline-success">
        <a href="users.edit.profile.php?user_id=<?php echo $id ?>">Edit Profile</a>
      </button>
      <button type="button" class="btn btn-outline-danger">
        <a href="users.change.password.php?user_id=<?php echo $id ?>">Change password</a>
      </button>
    </div>
</div>
