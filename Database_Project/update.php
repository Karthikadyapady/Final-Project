<?php
//Connecting to the database
	include 'include.php';
	
//Getting the ID and other information based on the row selected
	
	//Table 1
	$ID = $_POST['ID'];
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Username = $_POST['Username'];
	//Table 2
	$Age = $_POST['Age'];
	$Profession = $_POST['Profession'];
	$Gender = $_POST['Gender'];
	$Apt_type = $_POST['Apt_type'];
//code for spl character here
	$Profession2=htmlspecialchars($Profession, ENT_QUOTES);
	$Firstname2=htmlspecialchars($Firstname, ENT_QUOTES);
	$Lastname2=htmlspecialchars($Lastname, ENT_QUOTES);
	$Username2=htmlspecialchars($Username, ENT_QUOTES);
	$str = addslashes('$Apt_type');

	
//Query to update the information stored in the database


	$sql1 =  "UPDATE users SET First_name='$Firstname2', Last_name='$Lastname2', Username = '$Username2'
  WHERE ID = $ID";
	
	if ($conn->query($sql1) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$sql2 =  "UPDATE userinfo SET Age='$Age', Profession='$Profession2', Apt_type = '$Apt_type', Gender='$Gender'
  WHERE ID = $ID";
	
	if ($conn->query($sql2) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();

	//Redirecting to the admin.php page
	header('Location: update_successfull.php');
	?>
