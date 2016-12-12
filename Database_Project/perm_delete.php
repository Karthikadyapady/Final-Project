<?php

//Connecting to the database
include 'include.php';

//Getting the ID based on the row selected 
$ID = $_GET['ID'];
		
//Query to delete the row with that info_id from the database 
$sql = "DELETE FROM bin WHERE ID=$ID";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();

//Redirecting to the recycle_bin.php page
header('Location: recycle_bin.php');

?>