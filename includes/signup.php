<?php

if(isset($_POST['signup']))
{
  //store inputed data from forms in variables
  $name = $_POST['fullName'];
  $about = $_POST['about'];

  $company = $_POST['company'];
  $job = $_POST['job'];
  $country = $_POST['country'];

  $email = $_POST['email'];
  $password = $_POST['password'];
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = new mysqli("localhost", "root", "", "niceadmin");


    //$id=$_GET['user_id'];


      $query = "INSERT INTO users(fullName, about, company, job, country, users_email, users_password)
                VALUES ('$name','$about','$company','$job','$country','$email','$hashedpassword')";
      $mysqli->query("$query");
      //$result = $mysqli->query("$query");
      //$row = $result->fetch_assoc();

      /*
            echo "Result set order...\n";
            foreach ($result as $row) {
                echo " id = " . $row['id'] . "\n";
                echo " name = " . $row['fullName'] . "\n";
                echo " about = " . $row['about'] . "\n";
                echo " cpn = " . $row['company'] . "\n";
                echo " usrname = " . $row['users_email'] . "\n";
                echo " pass = " . $row['users_password'] . "\n";
            }
      */



      $query2 = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
      $result = $mysqli->query("$query2");
      $row = $result->fetch_assoc();
      //echo $row['id'];
      //$id = $row['id'];





   //go to Users profile
  header("location: ../users.overview.php?user_id=$row[id]");
}
?>
