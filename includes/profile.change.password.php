<?php

  $id=$_GET['user_id'];

 ?>


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Profile change password</h5>


    <form action="includes/change.pass.php" method="post" enctype="multipart/form-data">
      <?php if (isset($_GET['errormsg'])): ?>
        <p><?php printf('This is an error'); ?></p>
      <?php endif; ?>
      <div class="row mb-3">
        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
        <div class="col-md-8 col-lg-9">
          <input name="password" type="text" class="form-control" id="currentPassword">
        </div>
      </div>

      <div class="row mb-3">
        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
        <div class="col-md-8 col-lg-9">
          <input name="newpassword" type="password" class="form-control" id="newPassword">
        </div>
      </div>

      <div class="row mb-3">
        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
        <div class="col-md-8 col-lg-9">
          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
        </div>
      </div>

      <div class="text-center">
        <input type="hidden" name="form_id" value="<?php echo $id ?>">
        <button type="submit" name="change" class="btn btn-primary">Change Password</button>
      </div>
    </form><!-- End Change Password Form -->

  </div>
</div><!-- End Default Card -->
