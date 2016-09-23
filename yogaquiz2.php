<!DOCTYPE HTML>
<html lang = en>
<head>
<meta charset = "UTF-8">
 
<style>

body {
  background-color: #66ccff;
}

#quiz2 {
    border-style: groove;
    margin: 50px 80px 80px 80px;
    padding: 50px 80px 80px 80px;
    background-color: #80d4ff;
}

h1 {
    color: #002233;
    text-align: center;
    font-family: Georgia, sans-serif;
    padding: 10px 20px 20px 10px;
}

h2 {
    color: white;
    text-align: center;
    font-family: Georgia, sans-serif;
    padding: 5px 20px 20px 10px;
}

h5 {
     color: black;
     text-align: center;
     font-style: oblique; 
     font-family: Georgia, sans-serif;
     padding: 5px 20px 20px 10px;
}

h3 {
    color: #002233;
    text-align: left;
    font-family: Georgia, sans-serif;
}


#choice {
      border: 2px dotted white;
      color: #002233;
      font-family: Georgia, sans-serif;
      text-align: center;
      padding: 5px 2px 1px 2px;

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

</style>

</head>

<body>
    
      <div id="quiz2">
               <h1> Yoga Position Quiz </h1>
                   <h2> Quiz 2 </h2>
                  <h5> Instructions: Choose true or false whether the Sanskirt name matches the image of the yoga position </h5>
               <form name="yoga" action = "answers2.php" method="post">
             <ol>
                 <li>
                     <h3>Is this position called Ardha-Jathara-Parivarttanas in Sanskrit?</h3>
                     <img src="Adho-Mukha-Vrksasana.jpg" align="middle" alt="Adho Mukha Vrksasana">
                  <div id="choice">
                      <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                         <label for="question-1-answers-A"> True </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B"> False </label>
                    </div>
                  </li>
                   <li>
                    <h3>Is this position called Anantasana in Sanskrit?</h3>
                     <img src="Anantasana.jpg" align="middle" alt="Anantasana">
                  <div id="choice">
                      <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B"> False </label>
                   </div>
                    </li>

                   <li>
                    <h3>Is this position called Savasana in Sanskrit?</h3>
                     <img src="Savasana.jpg" align="middle" alt="Savasana">
                  <div id="choice">
                      <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B"> False </label>
                   </div>
                    </li>

                    <li>
                <h3>Is this position called Ardha Matsyasana in Sanskrit?</h3>
                     <img src="Bhuja-Vrischikasana.jpg" align="middle" alt="Bhuja-Vrischikasana">
                  <div id="choice">
                      <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B"> False </label>
                   </div>
                    </li>

                    <li>
                <h3>Is this position called Ardha-Padmasana in Sanskrit?</h3>
                     <img src="Astangasana.jpg" align="middle" alt="Astangasana">
                  <div id="choice">
                      <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B"> False </label>
                   </div>
                    </li>

                  <li>
                <h3>Is this position called Vrisikasana in Sanskrit?</h3>
                     <img src="Vrisikasana.jpg" align="middle" alt="Vrisikasana">
                  <div id="choice">
                      <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A"> True </label>
                    </div>
                  
                   <div id="choice"> 
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B"> False </label>
                   </div>
                    </li>

              <li>
                <h3>Is this position called Kapotasana in Sanskrit?</h3>
                     <img src="Kapotasana.jpg" align="middle" alt="Kapotasana">
                  <div id="choice"> 
                      <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B"> False </label>
                    </div>
                    </li>

              <li>
                <h3>Is this position called Adho Mukha Dandasana in Sanskrit?</h3>
                     <img src="Adho-Mukha-Dandasana.jpg" align="middle" alt="Adho Mukha Dandasana">
                  <div id="choice">
                      <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B"> False </label>
                    </div>
                    </li>
             <li>
                <h3>Is this position called Tadakasana in Sanskrit?</h3>
                     <img src="Tadakasana.jpg" align="middle" alt="Tadakasana">
                  <div id="choice">
                      <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B"> False </label>
                   </div>
                    </li>

             <li>
                <h3>Is this position called Parivrtta Bhujangasana in Sanskrit?</h3>
                     <img src="ParivrttaBhujangasana.jpg" align="middle" alt="Parivrtta Bhujangasana">
                  <div id="choice">
                      <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A"> True </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B"> False </label>
                    </div>
                    </li>
                   </ol>

       <input type="submit" id="submit" value="Submit Answers" />

                        </form>
                    </div>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
</body>
</html>

