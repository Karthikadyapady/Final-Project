<?php

//Connecting to the database
include 'include.php';

//Getting the ID based on the row selected 
$ID = $_GET['ID'];

//Storing the row in the recycle bin before deleting
$query3 = "
            SELECT 
              First_Name, Last_Name, Username, userinfo.ID, ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.ID = userinfo.ID
              
             WHERE
              users.ID='$ID'";
              
            $result3 = $conn->query($query3);
            $row=$result3->fetch_assoc();
            
            //Storing the information in PHP variables
			$ID=$row["ID"];
			$Firstname=$row["First_Name"];
            $Lastname=$row["Last_Name"];
            $Username=$row["Username"];
            $Age=$row["Age"];
            $Gender=$row["Gender"];
            $Profession=$row["Profession"];
            $Apt_type=$row["Apt_type"];
			
//Inserting the values stored in the php variables into the bin table
            $sql = "INSERT INTO bin (ID, ID, First_Name, Last_Name, Username, Age, Gender, Profession, Apt_type) 
            VALUES ('$ID', '$ID', '$Firstname', '$Lastname', '$Username', '$Age', '$Gender', '$Profession', '$Apt_type')";
 if ($conn->query($sql) ===TRUE) {
               echo "New record created successfully <br>";
            } else {
               echo "Error:" . $sql . "<br>" . $conn->error;
            }
			
			
//Query to delete the row with that ID from the database 
$sql = "DELETE FROM userinfo WHERE ID=$ID"; 
$sql2 = "DELETE FROM users WHERE ID=$ID";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$result2 = $conn->query($sql2);
if ($conn->query($sql2) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();

//Redirecting to the admin.php page
header('Location: admin.php');

?>