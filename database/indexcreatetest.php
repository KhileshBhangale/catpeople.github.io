<?php
include('connection.php');
$subtopic = $_GET['q'];
$l = $_GET['year'];
$time = $_GET['time'];



$sql = "SELECT Question_id FROM questions_database WHERE subTopic = '$subtopic' && year = '$l'";
$i=1;
$question = array();
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
     $question[$i] = $row['Question_id'];
     $i++;       
    }
 } else {
    printf('No record found.<br />');
 }
 
$insert = "INSERT INTO `created_test`(`Mobile_no`, `question1`, `question2`, `question3`, `question4`, `question5`,`time`) VALUES ('9049658442','$question[1]','$question[2]','$question[3]','$question[4]','$question[5]','$time')";

//$inserted = mysqli_query($conn,$insert);
if (mysqli_query($conn,$insert)) {
    printf("Record inserted successfully.<br />");
 }
 else {
    printf("Could not insert record into table: %s<br />",mysqli_error($conn));
 }
 
 

?>
