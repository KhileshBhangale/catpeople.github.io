<?php include('database/connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body {
  background: rgb(204,204,204); 
    box-sizing: border-box;
      }
    page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
    }
    page[size="A4"] {  
  width: 21cm;
  /*height: 29.7cm;*/ 
    }
    @media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
.watermark {
  position: relative;
}
.watermark::after {
  content: 'CatPeople.com';
  position: absolute;
  top: 500px;
  left: 150px;
  opacity: 0.5;
  font-size:5em;
}

.header{

width:98%;
height:50px;
border: 2px dotted black;
font-size:3em;
margin:5px;

}
    </style>

</head>
<body>
<page size="A4" class="page, watermark">
<?php
$year = $_POST['year'];
$topic = $_POST['topic'];
$subtopic = $_POST['subtopic'];
$getQuestions = "SELECT * FROM `questions_database` WHERE `year`= '$year' AND `subTopic`= '$subtopic'";
$questions = mysqli_query($conn,$getQuestions);
?>
<div class="header"> CatPeople.com</div>
<?php while($question = $questions->fetch_assoc()) { ?>
    <div style="border-bottom: 1px solid black; margin : 50px;">
   <p><?php echo $question['question'] ?><p>
   <p><?php echo $question['option1'] ?><p>
   <p><?php echo $question['option2'] ?><p>
   <p><?php echo $question['option3'] ?><p>
   <p><?php echo $question['option4'] ?><p>
   </div>
   <?php } ?>



</page>
</body>
</html>