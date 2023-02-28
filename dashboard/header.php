<?php
define('madu', true);
include "config.php"; 
session_start();
if (!isset($_SESSION['u_data'])) {
  header("location:../index.php");
}
 ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="#">Employee Portal</a>
      <form action="logout.php" method="POST">
        <button name="emp_logout" class="btn btn-danger btn-sm">Logout</button>
      </form>
    </div>
  </nav>
<?php if (isset($_SESSION['u_data'])) {
  $data=$_SESSION['u_data'];
  $role=$data['4'];
  if($role==0){
  ?>
  <div class="container-fluid bg-white d-flex justify-content-center">
    <a href="admin_profile.php" class="btn btn-info btn-sm m-2">Homepage</a>
    <a href="users_list.php" class="btn btn-info btn-sm m-2">Employees</a>
  </div>
<?php }}?>
