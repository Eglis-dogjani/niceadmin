<?php

if(isset($_POST['login']))
{

  //variables
  $username = $_POST['username'];
  $password = $_POST['password'];

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = new mysqli("localhost", "root", "", "niceadmin");

     //  $id=$_GET['user_id'];

    $query2 = "SELECT id, users_email, users_password FROM users WHERE users_email = '$username'";
    $result = $mysqli->query("$query2");
    $passwd = $result->fetch_assoc();
    $mail = $passwd['users_email'];
    $hash = $passwd['users_password'];

      $query = "SELECT id, users_email, users_password FROM users
                WHERE users_email = '$username'";
      $result = $mysqli->query("$query");
      //$row = $result->fetch_assoc();

      if ($username !== $mail) {
        echo "Incorrect email!";
      }elseif (password_verify($password, $hash) == false) {
        echo "Incorrect password!";
      }else {
        header("location: ../users.overview.php?user_id=$passwd[id]");
      }


  //go to Users profile
  //  header("location: ../users.overview.php?user_id=$row[id]");
}

?>
