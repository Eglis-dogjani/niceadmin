<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("localhost", "root", "", "niceadmin");

      //$id=$_GET['user_id'];

    $query = "SELECT id, fullName, company, job, country
              FROM users ";
    $result = $mysqli->query("$query");
    $row = $result->fetch_assoc();

/*
foreach ($result as $row) {
printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
printf("Name = %s (%s)\n", $row['fullName'], gettype($row['fullName']));
printf("Company = %s (%s)\n", $row['company'], gettype($row['company']));
printf("Job = %s (%s)\n", $row['job'], gettype($row['job']));
printf("Country = %s (%s)\n", $row['country'], gettype($row['country']));
}
*/

 ?>

 <head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Pages / Login - NiceAdmin Bootstrap Template</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="assets/img/favicon.png" rel="icon">
   <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link href="https://fonts.gstatic.com" rel="preconnect">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
   <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
   <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">

   <!-- =======================================================
   * Template Name: NiceAdmin - v2.2.0
   * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
   * Author: BootstrapMade.com
   * License: https://bootstrapmade.com/license/
   ======================================================== -->
 </head>

<!-- Table with stripped rows -->
<table class="table table-hover datatable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Job</th>
      <th scope="col">Company</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
    <?php     echo "Reverse order...\n";
    for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
        $result->data_seek($row_no);
        $row = $result->fetch_assoc();
      //  echo " id = " . $row['id'] . "\n"; ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['fullName'] ?></td>
      <td><?php echo $row['job'] ?></td>
      <td><?php echo $row['company'] ?></td>
      <td><?php echo $row['country'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<!-- End Table with stripped rows -->

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
