<?php
session_start();
include('config.php');
$email = $_POST['mail'];
$pass = $_POST['pass'];
$passwrd = base64_encode($_POST['pass']);
$qry = mysqli_query($con,"SELECT * FROM user WHERE email='$email' and password='$passwrd' ");
$qry1 = mysqli_num_rows($qry);
if($qry1)
{
  $row = mysqli_fetch_array($qry);
  $_SESSION['log'] = $row;
  $keys = "user";
  $_SESSION['log1'] = $keys;
  header("location:travel.php");
}
else if($email=='admin@gmail.com' AND $pass=='1234')
{
  $keys="admin";
  $_SESSION['log1']=$keys;
  header("location:dash.php");
}
else
{
  ?>
  <script>
    alert ("Wrong email ID or password");
    window.location.href = "index.php";
  </script>
  <?php 
}
?>