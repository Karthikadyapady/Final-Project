<?php

//Connecting to the database
include 'include.php';

//Getting the Inquiry_ID based on the row selected 
$Inquiry_ID = $_GET['Inquiry_ID'];

//Storing the row in the recycle bin before deleting
$query3 = "
            SELECT 
              First_Name, Last_Name, Username, userinfo.Inquiry_ID, Info_ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.Inquiry_ID = userinfo.Inquiry_ID
              
             WHERE
              users.Inquiry_ID='$Inquiry_ID'";
              
            $result3 = $conn->query($query3);
            $row=$result3->fetch_assoc();
            
            //Storing the information in PHP variables
			$Info_ID=$row["Info_ID"];
			$Firstname=$row["First_Name"];
            $Lastname=$row["Last_Name"];
            $Username=$row["Username"];
            $Age=$row["Age"];
            $Gender=$row["Gender"];
            $Profession=$row["Profession"];
            $Apt_type=$row["Apt_type"];
			
//Inserting the values stored in the php variables into the bin table
            $sql = "INSERT INTO bin (Info_ID, Inquiry_ID, First_Name, Last_Name, Username, Age, Gender, Profession, Apt_type) 
            VALUES ('$Info_ID', '$Inquiry_ID', '$Firstname', '$Lastname', '$Username', '$Age', '$Gender', '$Profession', '$Apt_type')";
 if ($conn->query($sql) ===TRUE) {
               echo "New record created successfully <br>";
            } else {
               echo "Error:" . $sql . "<br>" . $conn->error;
            }
			
			
//Query to delete the row with that info_id from the database 
$sql = "DELETE FROM userinfo WHERE Inquiry_ID=$Inquiry_ID"; 
$sql2 = "DELETE FROM users WHERE Inquiry_ID=$Inquiry_ID";
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