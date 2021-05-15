<?php
include('connection.php');
$i = $_GET['q'];
$l = $_GET['year'];



$sql = "SELECT * FROM questions_database WHERE subTopic = '$i' && year = '$l'";


$result = mysqli_query($conn,$sql);
$noofquestions= mysqli_num_rows($result);
$recommendedTime= $noofquestions * 2;

echo "<p style='font-size:15px; margin-top:10px; '>Your selected number of questions are : ".$noofquestions. "</p>";
echo "<p style='font-size:15px; margin-top:10px;'>Your Recommented time to this test is : <input type='number' id='setTime' value='".$recommendedTime."'>Minutes </p>";

?>



