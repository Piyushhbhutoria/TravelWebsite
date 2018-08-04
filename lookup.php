<?php
session_start();
include('config.php');

$place = $_POST['place'];
$date = $_POST['date'];
$time = $_POST['time'];
$uid = $_SESSION['log']['uid'];
$qry = mysqli_query($con,"INSERT INTO travel (place, dates, timee, uid) VALUES ('$place','$date','$time','$uid') ");
header("location:companion.php");
?>