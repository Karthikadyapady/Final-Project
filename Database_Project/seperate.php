<?php

//declaring variables for database connection
include 'include.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Capturing the first and the last name from the form and storing them in php variables

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Username = $_POST['Username'];



//Inserting the values stored in the php variables into the users table
$sql = "INSERT INTO users (First_name, Last_name, Username) 
VALUES ('$Firstname', '$Lastname' , '$Username')";

if ($conn->query($sql) ===TRUE) {
   //echo "New record created successfully <br>";
} else {
   echo "Error:" . $sql . "<br>" . $conn->error;
}
header('Location: display.php');
?>