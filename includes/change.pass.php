<?php
if(isset($_POST['change']))
{
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli("localhost", "root", "", "niceadmin");

  //error messages
  $error1 = "text";
  //store inputed data from forms in variables
  $pass_id=$_POST['form_id'];
  //echo $pass_id;
  $password = $_POST['password'];
  $password2 = $_POST['newpassword'];
  $password3 = $_POST['renewpassword'];

  //$hash1 = password_hash($password, PASSWORD_DEFAULT);
  $hash2 = password_hash($password2, PASSWORD_DEFAULT);
  //echo $hash1;
  //echo $hash2;

  $query2 = "SELECT users_password FROM users WHERE id= '$pass_id'";
  $result = $mysqli->query("$query2");
  $pass = $result->fetch_assoc();
  //password_verify — Verifies that a password matches a hash
  $hash = $pass['users_password'];
  //echo $hash;
  //echo $pass['users_password'];
  /*
  if (password_verify($password, $hash)) {
    echo "valid";
  }else {
    echo "no";
  }
  */
if ($password2 !== $password3) {
  header("location: ../users.change.password.php?user_id=$pass_id");
  exit();
//  echo "Passwords do not match!!!";
}elseif ($password == $password2 AND $password3) {
  header("location: ../users.change.password.php?user_id=$pass_id");
  exit();
  //echo "Change the password";
}elseif (password_verify($password, $hash) == false) {
  header("location: ../users.change.password.php?user_id=$pass_id?errormsg=$error1");
  exit();
  //echo 'Invalid password.';
}else {
  $query = "UPDATE users SET users_password = '$hash2' WHERE id = '$pass_id'";
  $mysqli->query("$query");
  header("location: ../users.overview.php?user_id=$pass_id");
}

/*

    //hash_equals — Timing attack safe string comparison
    //hash_equals($expected, $correct);
    //Compares two strings using the same time whether they're equal or not.
  if (hash_equals($passwordDB, $hashpass)) {
    $query = "UPDATE users SET users_password = '$hashpass2' WHERE id= '$pass_id'";
    $mysqli->query("$query");
    //header("location: ../users.overview.php?user_id=$pass_id");
  } else {
      echo 'Invalid password.Strings are not equal!!!';
      var_dump(hash_equals($passwordDB, $hashpass));
  }


*/


/*
      $query2 = "SELECT users_password FROM users WHERE id= '$pass_id'";
      $result = $mysqli->query("$query2");
      $pass = $result->fetch_assoc();

if ($password == $pass['users_password']) {
    if ($password2 == $password3) {
      $query = "UPDATE users SET users_password = '$password2' WHERE id= '$pass_id'";
      $mysqli->query("$query");
      //header("location: ../users.overview.php?user_id=$pass_id");
    }else {
      echo "Passwords do not match!!!";
    }
}else{
//  echo "Cannot Change Password!!!";
}

    //  $query = "UPDATE users SET users_password = '$password2' WHERE id= '$pass_id'";
  //    $mysqli->query("$query");
      //$row = $result->fetch_assoc();


      //go to Users profile
      //header("location: ../users.overview.php?user_id=$new_id");

*/




}




 ?>
