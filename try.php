<!DOCTYPE HTML>
<html lang = en>

<style>
body {
      background-color: #66ccff;
}

#form {
      border-style: groove;
      margin: 20px 80px 80px 90px;
      padding: 20px 80px 80px 90px;
      background-color: #80d4ff;
}

h1 {
    color: #002233;
    text-align: center;
    font-family: Georgia, sans-serif;
    padding: 10px 20px 20px 10px;
}

h4 {
     color: white;
     text-align: center;
     font-style: oblique; 
     font-family: Georgia, sans-serif;
     padding: 10px 20px 20px 10px;
}

p {
    color: #002233;
    text-align: center;
    font-family: Georgia, sans-serif;
    padding: 10px 20px 20px 10px;
}

#submit {
  background-color: #33bbff;
  padding: 5px; 
  color: white;
  font-family: Georgia, sans-serif;
  font-size: 16px; 
  text-align: center;
  border-radius: 8px;
  border: 4px solid #e6f7ff;
}

#submit:active {
  background-color: #80bfff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#delete {
  background-color: #33bbff;
  padding: 5px; 
  color: white;
  font-family: Georgia, sans-serif;
  font-size: 16px; 
  text-align: center;
  border-radius: 8px;
  border: 4px solid #e6f7ff;
}

#delete:active{
  background-color: #80bfff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>

<head>
<meta charset = "UTF-8">



</head>

<body>
<div id = "form">
<center>
<form name="nameform" action = "choosequiz.php" method="post">
<h1> Yoga Position Quiz </h1>
<h4> Choose a unique name or log in before starting the quiz! </h4>
<p>Username/Log in:<input type = "text" name="firstname" id="username"><br></p>

<button id="submit" name='save' type="submit" onClick="return validate();">Log in</button>
<button id="delete" type="reset">Clear</button>

</form>

<script>
/*JS function that validates the form. Alert box will pop up if textboxes are empty*/
function validate() {
		if(document.getElementById("username").value == ""){
			alert("Please log-in with username");
			return false;
		}
return true;
}
</script>	
</center>
</div>
</body>

</html>
