<?php include 'include.php'; $Apt_type=$ _POST[ 'apt_type']; ?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Search results</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="heading">Filtered Results</h2>
    <div class="search">
        <div class="home">
            <a href="admin.php"> <img src="./images/home.png" alt="Smiley face" height="16" width="16"> </a>
        </div>
        <form action="search_results.php" method="post">
            <ul>
                <li>
                    <span class="un"><i class="fa fa-user"></i></span>
                    <input type="text" required class="text search" placeholder="Search firstname, lastname or username" name="search" />
                </li>
                <li>
                    <input type="submit" value="SEARCH" class="btn align">
                </li>
            </ul>
        </form>
        <div class="filter"> Filter By</div>
        <form action="filter_results.php" method="post">
            <select class="select" name="apt_type">
                <?php if($Apt_type=="Studio" ){ echo "
          <option selected value=\"Studio\ ">studio</option>
          <option value=\"1BHK\ ">1bhk</option>
          <option value=\"2BHK\ ">2bhk</option>
          <option value=\"3BHK\ ">3bhk</option> "; } elseif($Apt_type=="1BHK" ){ echo "
          <option value=\"Studio\ ">studio</option>
          <option selected value=\"1BHK\ ">1bhk</option>
          <option value=\"2BHK\ ">2bhk</option>
          <option value=\"3BHK\ ">3bhk</option> "; } elseif($Apt_type=="2BHK" ){ echo "
          <option value=\"Studio\ ">studio</option>
          <option value=\"1BHK\ ">1bhk</option>
          <option selected value=\"2BHK\ ">2bhk</option>
          <option value=\"3BHK\ ">3bhk</option> "; } else{ echo "
          <option value=\"Studio\ ">studio</option>
          <option value=\"1BHK\ ">1bhk</option>
          <option value=\"2BHK\ ">2bhk</option>
          <option selected value=\"3BHK\ ">3bhk</option> "; } ?>
            </select>
            <input type="submit" value="GO" class="btn align1">
        </form>
    </div>
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
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php $i=1; //Variable to check all info_ids $sn=0; //Variable to print the serial number while ($i<1000) { //Checking through all the rows $query2="
            SELECT 
              First_Name, Last_Name, Username, userinfo.Inquiry_ID, Info_ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.Inquiry_ID = userinfo.Inquiry_ID
              
             WHERE
              userinfo.Info_ID='$i'
			  
			  AND Apt_type LIKE '$Apt_type'" ; $result2=$conn->query($query2); //Execute only if a row with that info_id present in the database if($row=$result2->fetch_assoc()){ $sn++; //incrementing the serial number, if the row is printed //Query to retrieve all the information from the database $query3 = " SELECT First_Name, Last_Name, Username, userinfo.Inquiry_ID, Info_ID, Age, Gender, Profession, Apt_type FROM users JOIN userinfo ON users.Inquiry_ID = userinfo.Inquiry_ID WHERE userinfo.Info_ID='$i' AND Apt_type LIKE '$Apt_type'"; $result3 = $conn->query($query3); $row=$result3->fetch_assoc(); //Storing all the retrieved information in PHP variables $Firstname=$row["First_Name"]; $Lastname=$row["Last_Name"]; $Username=$row["Username"]; $Age=$row["Age"]; $Gender=$row["Gender"]; $Profession=$row["Profession"]; $Apt_type=$row["Apt_type"]; $info_id=$row["Info_ID"]; $Inquiry_ID=$row["Inquiry_ID"]; //Displaying all the data as a table row echo "
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
                <a href=delete.php?Inquiry_ID=" . $Inquiry_ID  .">
                    <button type=\ "button\" class=\ "btn\">Delete</button>
                </a>
            </td>
            <td>
                <a href=updateForm.php?Inquiry_ID=" . $Inquiry_ID  .">
                    <button type=\ "button\"class=\ "btn\">Update</button>
                </a>
            </td>
        </tr>"; } $i++; //incrementing variable to check the next info_id after each pass } if($sn==0){ echo "
        <h1>No matches found</h1>"; } ?>
    </table>
</body>

</html>