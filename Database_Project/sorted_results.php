<?php include 'include.php'; $category=$ _GET[ 'category']; ?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Real Estate Database</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="heading">Sorted by <?php echo $category; ?></h2>
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
            <th>First Name<a href="sorted_results_a.php?category=First Name">Asc</a><a href="sorted_results_d.php?category=First Name">Desc</a>
            </th>
            <th>Last Name<a href="sorted_results_a.php?category=Last Name">Asc</a><a href="sorted_results_d.php?category=Last Name">Desc</a>
            </th>
            <th>Username</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Profession</th>
            <th>Apartment Type</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php if($category=='First Name' ){ $sql="SELECT First_Name, Last_Name, Username, userinfo.ID, ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.ID = userinfo.ID
			ORDER BY First_Name" ; } else{ $sql="SELECT First_Name, Last_Name, Username, userinfo.ID, ID, Age, Gender, Profession, Apt_type
            FROM
              users JOIN userinfo
            ON
              users.ID = userinfo.ID
			ORDER BY Last_Name" ; } $result=$ conn->query($sql); if ($result->num_rows > 0) { $sn=1; // output data of each row while($row = $result->fetch_assoc()) { //Displaying all the data as a table row echo "
        <tr>
            <td>".$sn."</td>
            <td>".$row['First_Name']."</td>
            <td>".$row['Last_Name']."</td>
            <td>".$row['Username']."</td>
            <td>".$row['Age']."</td>
            <td>".$row['Gender']."</td>
            <td>".$row['Profession']."</td>
            <td>".$row['Apt_type']."</td>
            <td>
                <a href=delete.php?ID=" . $row['ID']  .">
                    <button type=\ "button\" class=\ "btn\">Delete</button>
                </a>
            </td>
            <td>
                <a href=updateForm.php?ID=" . $row['ID']  .">
                    <button type=\ "button\"class=\ "btn\">Update</button>
                </a>
            </td>
        </tr>"; $sn++; } } ?>
    </table>
</body>

</html>