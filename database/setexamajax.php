<?php
include('connection.php');
$i = $_GET['q'];

$sql = "SELECT 'Mobile_no', 'question1' FROM created_test WHERE Mobile_no = '$i'";

$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
$username = $row['Mobile_no'];

echo "<pre>".$username."<pre>";

?>