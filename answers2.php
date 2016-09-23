<!DOCTYPE HTML>
<html lang = en>
<head>
<meta charset = "UTF-8">

<style>

body {
     background-color: #66ccff;
}

#form {
      border-style: groove;
      margin: 80px 80px 80px 90px;
      padding: 80px 80px 80px 90px;
      background-color: #80d4ff;
}

p {
     color: #002233;
     text-align: center;
     font-style: oblique; 
     font-family: Georgia, sans-serif;
     padding: 10px 20px 20px 10px;
}

a{
  color:white;
}

h3 {
    color: #002233;
    text-align: center;
    font-family: Georgia, sans-serif;
    padding: 5px 20px 5px 10px;
    border: 1px solid black;
}



#results {
      color: #002233;
      text-align: center;
      font-family: Georgia, sans-serif;
      padding: 10px 20px 20px 10px;
}

#q1 {
    margin: 5px 10px 5px 10px;
    padding: 5px 10px 5px 10px;
    background-color: #80d4ff;
}

#q2{
    margin: 5px 10px 5px 10px;
    padding: 5px 10px 5px 10px;
    background-color: #80d4ff;
}


#submit {
  background-color: #33bbff;
  padding: 2px 8px80px 2px; 
  color: white;
  font-family: Georgia, sans-serif;
  font-size: 14px; 
  text-align: center;
  border-radius: 8px;
  border: 4px solid #e6f7ff;
  margin: center;
}

#submit:active{
  background-color: #80bfff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>

</head>

<body>
<div id="form">

<p>
Many thanks to <a href="http://www.yogacards.com">www.yogacards.com</a> for giving permission(2016) to use the cards available on the site.
</p>


<h3> Your score is: </h3>
<?php

/*$_POST['question-1-answers']=null;
$_POST['question-2-answers']=null;
$_POST['question-3-answers']=null;
$_POST['question-4-answers']=null;
$_POST['question-5-answers']=null;
$_POST['question-6-answers']=null;
$_POST['question-7-answers']=null;
$_POST['question-8-answers']=null;
$_POST['question-9-answers']=null;
$_POST['question-10-answers']=null;
*/

if(isset($_POST['question-1-answers'])) {
            $answer1 = $_POST['question-1-answers'];
}
if(isset($_POST['question-2-answers'])) {
            $answer2 = $_POST['question-2-answers'];
}

if(isset($_POST['question-3-answers'])) {
            $answer3 = $_POST['question-3-answers'];
}

if(isset($_POST['question-4-answers'])) {
            $answer4 = $_POST['question-4-answers'];
}

if(isset($_POST['question-5-answers'])) {
            $answer5 = $_POST['question-5-answers'];
}

if(isset($_POST['question-6-answers'])) {
            $answer6 = $_POST['question-6-answers'];
}

if(isset($_POST['question-7-answers'])) {
            $answer7 = $_POST['question-7-answers'];
}

if(isset($_POST['question-8-answers'])) {
            $answer8 = $_POST['question-8-answers'];
}

if(isset($_POST['question-9-answers'])) {
            $answer9 = $_POST['question-9-answers'];
}

if(isset($_POST['question-10-answers'])) {
            $answer10 = $_POST['question-10-answers'];
}
        
            $totalCorrect = 0;
            

if(isset($_POST['question-1-answers'])) {
            if ($answer1 == "B") { $totalCorrect++; }
}

if(isset($_POST['question-2-answers'])) {
            if ($answer2 == "A") { $totalCorrect++; }
}

if(isset($_POST['question-3-answers'])) {
            if ($answer3 == "A") { $totalCorrect++; }
}

if(isset($_POST['question-4-answers'])) {
            if ($answer4 == "B") { $totalCorrect++; }
}

if(isset($_POST['question-5-answers'])) {
            if ($answer5 == "B") { $totalCorrect++; }
}

if(isset($_POST['question-6-answers'])) {
            if ($answer6 == "A") { $totalCorrect++; }
}

if(isset($_POST['question-7-answers'])) {
            if ($answer7 == "A") { $totalCorrect++; }
}

if(isset($_POST['question-8-answers'])) {
            if ($answer8 == "A") { $totalCorrect++; }
}

if(isset($_POST['question-9-answers'])) {
            if ($answer9 == "A") { $totalCorrect++; }
}

if(isset($_POST['question-10-answers'])) {
            if ($answer10 == "A") { $totalCorrect++; }
}
            
            echo "<div id='results'>$totalCorrect / 10 </div>";

/*if(isset($_POST['submit'])) {
$_POST['question-1-answers'];*/

            
        ?>


<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
<div id="q1">
<form name="nextquiz2" action = "yogaquiz.php" method="post">
<button id="submit" name="save" type="submit">Do quiz 1</button>
</form>
</div>

<div id="q2">
<form name="back2" action = "try.php" method="post">
<button id="submit" name="save" type="submit">Back to log in</button>
</form>
</div>

</div>
</body>
</html>
