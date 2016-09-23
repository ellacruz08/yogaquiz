<!DOCTYPE HTML>
<html lang = en>
<head>
<meta charset = "UTF-8">

<style>

body {
  background-color: #66ccff;
}

#quiz1 {
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
<center>
      <div id = "quiz1">
               <h1> Yoga Position Quiz </h1>
                   <h2> Quiz 1 </h2>
                  <h5> Instructions: Choose the correct English name out of the 4 choices given for the image </h5>
               <form name="yoga" action = "answers.php" method="post">
             <ol>
                 <li>
                     <h3>What is this position called?</h3>
                     <img src="chair.jpg" align="middle" alt="Chair Pose">
                  <div id="choice">
                      <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Headstand </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Chair Pose </label>
                   </div>
                   <div id="choice">
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Standing Forward Bend </label>
                    </div>
                   <div id="choice">
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                  </li>
                   <li>
                    <h3>What is this position called?</h3>
                     <img src="headstand.jpg" align="middle" alt="Headstand">
                  <div id="choice">
                      <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) One leg Side Crane Pose </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Triangle Pose </label>
                   </div>
                   <div id="choice">
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Chair Pose </label>
                    </div>
                   <div id="choice">
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) None of the above</label>
                    </div>
                    </li>
                   <li>
                    <h3>What is this position called?</h3>
                     <img src="Triangle.jpg" align="middle" alt="Triangle Pose">
                  <div id="choice">
                      <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Reclining Angle Pose </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) One leg Side Crane Pose </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Triangle Pose </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None of the above</label>
                    </div>
                    </li>
                    <li>
                <h3>What is this position called?</h3>
                     <img src="StandingBend.jpg" align="middle" alt="Standing Forward Bend">
                  <div id="choice">
                      <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Headstand </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Standing Forward Bend </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Knee to the Head </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) None of the above</label>
                    </div>
                    </li>
                    <li>
                <h3>What is this position called?</h3>
                     <img src="OneLeg.jpg" align="middle" alt="One leg Side Crane">
                  <div id="choice">
                      <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) One leg Side Crane </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Knee to the Head </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Standing Forward Bend </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) None of the above</label>
                    </div>
                    </li>
                  <li>
                <h3>What is this position called?</h3>
                     <img src="RecliningAngle.jpg" align="middle" alt="Reclining Angle Pose">
                  <div id="choice">
                      <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) Triangle Pose </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Reclining Angle Pose </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) Headstand </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) None of the above</label>
                    </div>
                    </li>
              <li>
                <h3>What is this position called?</h3>
                     <img src="KneeHead.jpg" align="middle" alt="Knee to the Head">
                  <div id="choice">
                      <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) Yogic Sleep Pose </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) Tree Pose </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) Knee to the Head </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) None of the above</label>
                    </div>
                    </li>
              <li>
                <h3>What is this position called?</h3>
                     <img src="TreePose.jpg" align="middle" alt="Tree Pose">
                  <div id="choice">
                      <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A) Tree Pose </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) Triangle Pose </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) One leg Side Crane </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) None of the above</label>
                    </div>
                    </li>
             <li>
                <h3>What is this position called?</h3>
                     <img src="YogicSleep.jpg" align="middle" alt="Yogic Sleep Pose">
                  <div id="choice">
                      <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A) Headstand </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) Monkey King Chief </label>
                   </div>

                   <div id="choice">
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) Yogic Sleep Pose </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) None of the above</label>
                    </div>
                    </li>
             <li>
                <h3>What is this position called?</h3>
                     <img src="Monkey-King.jpg" align="middle" alt="Monkey King Chief">
                  <div id="choice">
                      <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A) Monkey King Chief </label>
                    </div>
                  
                   <div id="choice">
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Triangle Pose </label>
</div>
                   
                   <div id="choice">
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) Chair Pose </label>
                    </div>

                   <div id="choice">
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) None of the above</label>
                    </div>
                    
                    </li>
                   </ol>
       <input type="submit" id="submit" value="Submit Answers" />

                        </form>
                    </div>


<!--<?php
$servername = "localhost";
$username = "ellacruz08";
$password = "redroses22";
$dbname = "Diary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/

// Create database - Uncomment IF statement to check
$sql = "CREATE DATABASE Diary";
/*if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/

// sql to create table - Uncomment IF statement to check
$sql = "CREATE TABLE Yoga2 (
Name VARCHAR(50) NOT NULL PRIMARY KEY
)";

/*if ($conn->query($sql) === TRUE) {
    echo "Table Yoga2 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/

//Checks form, selects data and puts them in a new table
if (isset($_POST['showdiary'])) {
    $sql = "SELECT * FROM Yoga2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

echo "<table>
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>";

     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>".$row['id']."</td>";
         echo "<td>".$row['Name']."</td>";
         echo"</tr>";
     }
} else {
     echo "0 results";
	}

}

//Inserts data into the database when the button named "save" is clicked
if(isset($_POST['save'])) {
$sql = "INSERT INTO Yoga2 (Name)
VALUES ('$_POST[firstname]')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Username stored')</script>";
} else {
    echo "<script type='text/javascript'>alert('Welcome back!')</script>";
}

}

$conn->close();
?>-->

</center>
</body>
</html>

