
<!DOCTYPE html>
<html>
<head>
<title>Practice Test</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/mock.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/calculator.js"></script>

   <?php
     $fetchstartquestion = "SELECT 'Question_id' FROM created_test where Mobile_no = 9049658442";
    ?>


</script>
</head>

<body onload="questionAlert()">
<div class="header">
  <div class= "logo">CAT Peoples</div>
  <div class="title" >Practice test </div>
</div>
<div class="subheader">
<i class="fa fa-question-circle" aria-hidden="true"></i> Question Paper
</div>

  <div style="float:left">
<section style="height :45px; background-color:#cfcece;">

<button class="calc" id="myBtn" ><i class="fa fa-calculator fa-5" aria-hidden="true"></i></button>
</section>
<section style="height :30px; border-bottom:1px solid #cfcece;">
    section 
    <B> <p id="timer" style="float:right;"></p></B>
</section>
<section style="height:37px; ">

</section>
</div>
<div class="cardbox">
<div class="card">
  <img src="images/avatar.png" alt="" class="photo">
 <span id="userName"> <b>Khilesh Bhangale</b></span>
</div>
</div>
<div style="float:left;">
<section style="height:30px; border-bottom:1px solid #cfcece; border-top:3px solid #cfcece;">
<p style="color:orange;">Type:MCQ|Marks:</p>
</section>
<section>
<div class="maincontainer">
<div class="container1">


</div>
<div class="container2">
<p id="txtHint"></p>
<input type="radio" value="" name="option" id='op1' class="radio" ><lable for="op1"  id="lableop1"></lable>
<input type="radio" value="" name="option" id='op2' class="radio" ><lable for="op2"  id="lableop2"></lable>
<input type="radio" value="" name="option" id='op3' class="radio" ><lable for="op3"  id="lableop3"></lable>
<input type="radio" value="" name="option" id='op4' class="radio" ><lable for="op4"  id="lableop4"></lable>

  
</div>
</div>
</section>
</div>
<div class="quebox">
  <table class="table">
    <tr>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color: yellow"></button>Answered</td>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color:red"></button>Not Answered</td>
    
    </tr>
    <tr>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color:#aaaaaa"></button>Not Visited</td>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color:green;"></button>Marked for review</td>
    </tr>

    <tr>
      <td style=" border:none;"><button style="height: 15px;width: 15px; border:none; background-color:blue;"></button>Answered and Marked for Review</td>

      </tr>
  </table>
  <div style="background-color:rgb(45, 112, 182); width: 100%; height: 30px; padding:5px;">
  <p style="color:white;"><b>LDRI</b></p>
  </div>
  <div style="background-color:skyblue; width: 100%; height: 20px; padding:3px;">
  <p style="color:black;">Choose a Question</p>
  </div>
<div style="height: 190px; width: 230px; margin: 6px; overflow-x:auto;">
<?php
for($Question=1;$Question<=30;$Question++)
{
  
  

  
?>
<button type="button" id="colorbt<?php echo $Question ?>" value="<?php echo $Question ?>"class="notvisited" onclick="saveCheked(this.value)"><?php echo "$Question";?></button>


<?php } ?>

</div>

</div>
 
<div class="downbar" style="float:left;">
<input type="button" value="Mark for Review & Next"class ="bookmark" onclick="reviewCheked()">
<input type="button" value="Clear Responce" class="clearbt" onclick="clearCheked()">
<input type="button" value="Save & Next" class="nextbt" onclick="saveCheked(1)">
</div>
<div class="submitBT">
<input class="submit" type="submit">
</div>


<div id="demo" role="dialog" class="modal fade modal-dialog">
    <b>Calculator</b>
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    
    <div><input type="text" style="height: 20px;" id="I" dir="rtl" disabled></div>
    <div>
        <div>
        <input type="button" value="MC">
        <input type="button" value="M+">
        <input type="button" value="M-">
        <input type="button" value="MR">
        <input type="button" value="MS" >
        </div>
        <div>
        <input type="button" value="C" onclick="clr()">
        <input type="button" value="+-">
        <input type="button" value="/" onclick="keyPressed('/')">
        <input type="button" value="*" onclick="keyPressed('*')">
        <input type="button" value="&#8592;" onclick="remove()">
        </div>
        <div>
        <input type="button" value="7" onclick="keyPressed('7')">
        <input type="button" value="8" onclick="keyPressed('8')">
        <input type="button" value="9" onclick="keyPressed('9')">
        <input type="button" value="-" onclick="keyPressed('-')">
        <input type="button" value="%" onclick="keyPressed('/100*')">
        </div>
        <div>
        <input type="button" value="4" onclick="keyPressed('4')">
        <input type="button" value="5" onclick="keyPressed('5')">
        <input type="button" value="6" onclick="keyPressed('6')">
        <input type="button" value="+" onclick="keyPressed('+')">
        <input type="button" value="&#119909;&#8315;&#185;" onclick="keyPressed('1/')">
        </div>
       
        <div>
        <input type="button" value="1" onclick="keyPressed('1')">
        <input type="button" value="2" onclick="keyPressed('2')">
        <input type="button" value="3" onclick="keyPressed('3')">
        <input type="button" value="&#119909;&#8319;" onclick="keyPressed('**')">
        <input type="button" value="&radic;" onclick="square()">
        </div>
        <div>
        <input type="button" style="width: 66px;" value="0" onclick="keyPressed('0')">
        <input type="button" value="." onclick="keyPressed('.')">
        <input type="button" style="width: 66px;" value="=" onclick="solve()">
        </div>
</div> 


</body>
<script>

  function buttonCheked(){
  var W = document.getElementById("op1").checked;
  var X = document.getElementById("op2").checked;
  var Y = document.getElementById("op3").checked;
  var Z = document.getElementById("op4").checked;

  if (W==true || X==true || Y==true || Z==true){
  
  return true;
    }
    else{
      return false;
    }                                         
    }


  

    function saveCheked(str) {
      
      var xhttp;  
      if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       var Questiondata =JSON.parse(this.responseText);
       document.getElementById("txtHint").innerHTML = Questiondata.question;
       document.getElementById("lableop1").innerHTML = Questiondata.option1;
       document.getElementById("lableop2").innerHTML = Questiondata.option2;
       document.getElementById("lableop3").innerHTML = Questiondata.option3;
       document.getElementById("lableop4").innerHTML = Questiondata.option4;
       
      }
      };
      xhttp.open("GET", "questionaccess.php?q="+str, true);
      xhttp.send();

      var cheked = buttonCheked();
      if (cheked == true){
  
      document.getElementById('colorbt').className="answered";
  
       }
      else{
      document.getElementById('colorbt').className="notanswered";
      }  
  
      }

      


    function reviewCheked(){
      
    var cheked = buttonCheked();
    if (cheked == true){
  
    document.getElementById('colorbt').className="ansbtreview";
  
    }
    else{
      document.getElementById('colorbt').className="mforreview";
    }    
    }

    function clearCheked(){
      var cheked = buttonCheked();
  if (cheked == true){
    document.getElementById("op1").checked=false;
    document.getElementById("op2").checked=false;
    document.getElementById("op3").checked=false;
    document.getElementById("op4").checked=false;
  
  document.getElementById('colorbt').className="notanswered";
    }
    }
    
</script>

</html>