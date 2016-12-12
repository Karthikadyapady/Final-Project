<?php include 'include.php'; $keyword=$ _POST[ 'search']; ?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Search results</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="heading">Search results</h2>
    <div class="search">
        <div class="home">
            <a href="admin.php"> <img src="./images/home.png" alt="Smiley face" height="16" width="16"> </a>
        </div>
        <form action="search_results.php" method="post">
            <ul>
                <li>
                    <span class="un"><i class="fa fa-user"></i></span>
                    <input type="text" required class="text search" value="<?php echo $keyword; ?>" name="search" />
                </li>
                <li>
                    <input type="submit" value="SEARCH" class="btn align">
                </li>
            </ul>
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
        <?php $i=1; //Variable to check all IDs $sn=0; //Variable to print the serial number while ($i<1000) { //Checking through all the rows $query2="
            SELECT 
              First_Name, Last_Name, Username, userinfo.ID, ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.ID = userinfo.ID
              
             WHERE
              userinfo.ID='$i'
			  
			  AND (First_Name LIKE '$keyword' OR Last_Name LIKE '$keyword' OR Username LIKE '$keyword')" ; $result2=$conn->query($query2); //Execute only if a row with that ID present in the database if($row=$result2->fetch_assoc()){ $sn++; //incrementing the serial number, if the row is printed //Query to retrieve all the information from the database $query3 = " SELECT First_Name, Last_Name, Username, userinfo.ID, ID, Age, Gender, Profession, Apt_type FROM users JOIN userinfo ON users.ID = userinfo.ID WHERE userinfo.ID='$i' AND (First_Name LIKE '$keyword' OR Last_Name LIKE '$keyword' OR Username LIKE '$keyword')"; $result3 = $conn->query($query3); $row=$result3->fetch_assoc(); //Storing all the retrieved information in PHP variables $Firstname=$row["First_Name"]; $Lastname=$row["Last_Name"]; $Username=$row["Username"]; $Age=$row["Age"]; $Gender=$row["Gender"]; $Profession=$row["Profession"]; $Apt_type=$row["Apt_type"]; $ID=$row["ID"]; $ID=$row["ID"]; //Displaying all the data as a table row echo "
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
                <a href=delete.php?ID=" . $ID  .">
                    <button type=\ "button\" class=\ "btn\">Delete</button>
                </a>
            </td>
            <td>
                <a href=updateForm.php?ID=" . $ID  .">
                    <button type=\ "button\"class=\ "btn\">Update</button>
                </a>
            </td>
        </tr>"; } $i++; //incrementing variable to check the next ID after each pass } if($sn==0){ echo "
        <h1>No results found</h1>"; } ?>
    </table>
</body>

</html>