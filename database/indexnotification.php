<?php include('database/connection.php');

$getnotifications = "SELECT * FROM `Notification` WHERE ID != 0";
$notifications = mysqli_query($conn,$getnotifications);

$getDistinctyears = "SELECT DISTINCT year FROM `questions_database` where year !=null || year != 0";
$Distinctyears = mysqli_query($conn,$getDistinctyears);

?>