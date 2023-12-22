<?php
include("../php connect/connect.php");
$id=$_GET['id'];
mysqli_query($con, "delete from `user_registration` where id = '$id'");
header("location: dashboard.php");
?>