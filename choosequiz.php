<!DOCTYPE HTML>
<html lang = en>
 
<head>
<meta charset = "UTF-8">

<style>
body {
    background-color: #66ccff;
}

#login {
    border-style: groove;
    margin: 50px 80px 80px 90px;
    padding: 50px 80px 80px 90px;
    background-color: #80d4ff;
}

h4 {
   color: white;
   text-align: center;
   font-style: oblique; 
   font-family: Georgia, sans-serif;
   padding: 5px 20px 20px 10px;
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

#pos {
  background-color: #33bbff;
  padding: 2px 8px 8px 2px; 
  color: white;
  font-family: Georgia, sans-serif;
  font-size: 16px; 
  text-align: center;
  border-radius: 8px;
  border: 4px solid #e6f7ff;
  margin: center;
}

#pos:active{
  background-color: #80bfff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

/*#sanskritpos {
  background-color: #33bbff;
  padding: 2px 8px; 
  color: white;
  font-family: Georgia, sans-serif;
  font-size: 16px; 
  text-align: center;
  border-radius: 8px;
  border: 2px solid #e6f7ff;
  

}*/
</style>

</head>


<body>

<div id = "login">
<center>
<h4> Choose one of the quizzes below! </h4>

<div id="q1">
<form name="quizform1" action = "yogaquiz.php" method="post">
<button id="pos" name="quiz1" type="submit"> English Position Quiz </button>
</form>
</div>

<div id="q2">
<form name="quizform2" action = "yogaquiz2.php" method="post">
<button id="pos" name="quiz2" type="submit"> Sanskrit Position Quiz </button>
</div>
</center>
</div>
</form>

<?php
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

/*Checks form, selects data and puts them in a new table
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

}*/

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
?>

</center>
</body>
</html>
