<?php include 'include.php';?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Real Estate Recycle Bin</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="heading">Recycle Bin</h2>
    <table>
        <tr>
            <th>Sr. No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Profession</th>
            <th>Apartment Type</th>
            <th>Permanently Delete</th>
        </tr>
        <?php $i=1; //Variable to check all IDs $sn=1; //Variable to print the serial number while ($i<1000) { //Checking through all the IDs $query2="
            SELECT 
              ID
            FROM
              bin
            WHERE
              ID='$i'" ; $result2=$conn->query($query2); //Execute only if a row with that ID present in the database if($row=$result2->fetch_assoc()){ //Query to retrieve all the information from the database $query3 = " SELECT First_Name, Last_Name, Username, ID, ID, Age, Gender, Profession, Apt_type FROM bin WHERE ID='$i'"; $result3 = $conn->query($query3); $row=$result3->fetch_assoc(); //Storing all the retrieved information in PHP variables $ID=$row["ID"]; $ID=$row["ID"]; $Firstname=$row["First_Name"]; $Lastname=$row["Last_Name"]; $Username=$row["Username"]; $Age=$row["Age"]; $Gender=$row["Gender"]; $Profession=$row["Profession"]; $Apt_type=$row["Apt_type"]; //Displaying all the data as a table row echo "
        <tr>
            <td>".$sn."</td>
            <td>".$Firstname."</td>
            <td>".$Lastname."</td>
            <td>".$Username."</td>
            <td>".$Age."</td>
            <td>".$Gender."</td>
            <td>".$Profession."</td>
            <td>".$Apt_type."</td>
            <td>
                <a href=perm_delete.php?ID=" . $ID  .">
                    <button type=\ "button\" class=\ "btn\">Delete Permanently</button>
                </a>
            </td>
        </tr>"; $sn++; //incrementing the serial number, if the row is printed } $i++; //incrementing variable to check the next ID after each pass } ?>
    </table>
</body>

</html>