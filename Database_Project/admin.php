<?php include 'include.php';?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Real Estate Database</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="heading">Inquiry Database</h2>
    <div class="search">
        <div class="home">
            <a href="index.php"> <img src="./images/home.png" alt="Smiley face" height="16" width="16"> </a>
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
                <option value="studio">Studio</option>
                <option value="1BHK">1bhk</option>
                <option value="2BHK">2bhk</option>
                <option value="3BHK">3bhk</option>
            </select>
            <input type="submit" value="GO" class="btn align1">
        </form>
    </div>
    <table>
        <tr>
            <th>Sr. No.</th>
            <th>First Name
                <a href="sorted_results_a.php?category=First Name">
                    <div class="arrow-up"></div>
                </a>
                <a href="sorted_results_d.php?category=First Name">
                    <div class="arrow-down"></div>
                </a>
            </th>
            <th>Last Name
                <a href="sorted_results_a.php?category=Last Name">
                    <div class="arrow-up"></div>
                </a>
                <a href="sorted_results_d.php?category=Last Name">
                    <div class="arrow-down"></div>
                </a>
            </th>
            <th>Username</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Profession</th>
            <th>Apartment Type</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php $i=1; //Variable to check all IDs $sn=1; //Variable to print the serial number while ($i<1000) { //Checking through all the IDs $query2="
            SELECT 
              ID
            FROM
              userinfo
            WHERE
              ID='$i'" ; $result2=$conn->query($query2); //Execute only if a row with that ID present in the database if($row=$result2->fetch_assoc()){ //Query to retrieve all the information from the database $query3 = " SELECT First_Name, Last_Name, Username, userinfo.ID, ID, Age, Gender, Profession, Apt_type FROM users JOIN userinfo ON users.ID = userinfo.ID WHERE userinfo.ID='$i'"; $result3 = $conn->query($query3); $row=$result3->fetch_assoc(); //Storing all the retrieved information in PHP variables $Firstname=$row["First_Name"]; $Lastname=$row["Last_Name"]; $Username=$row["Username"]; $Age=$row["Age"]; $Gender=$row["Gender"]; $Profession=$row["Profession"]; $Apt_type=$row["Apt_type"]; $ID=$row["ID"]; $ID=$row["ID"]; //Displaying all the data as a table row echo "
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
        </tr>"; $sn++;  //incrementing the serial number, if the row is printed } $i++; //incrementing variable to check the next ID after each pass } ?>
    </table>
</body>

</html>
