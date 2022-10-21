<?php
if(isset($_POST['update']))
{
  //store inputed data from forms in variables
  $new_id=$_POST['form_id'];
  //echo $new_id;
  $new_name = $_POST['fullName'];
  $new_about = $_POST['about'];

  $new_company = $_POST['company'];
  $new_job = $_POST['job'];
  $new_country = $_POST['country'];

  $new_email = $_POST['email'];
  //$password = $_POST['password'];

  $target="users_img/";
    $file_name=$_FILES['userfile']['name'];
    $file_tmp=$_FILES['userfile']['tmp_name'];
		$file_path=$target.basename($_FILES['userfile']['name']);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = new mysqli("localhost", "root", "", "niceadmin");




      $query = "UPDATE users SET image = '$file_path', fullName = '$new_name', about = '$new_about',
                                 company = '$new_company', job = '$new_job', country = '$new_country',
                                 users_email = '$new_email'
                                 WHERE id= '$new_id'";
      $mysqli->query("$query");
      //$row = $result->fetch_assoc();


      //go to Users profile
      header("location: ../users.overview.php?user_id=$new_id");






}




 ?>
