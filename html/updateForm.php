
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Inquiry Form</title>
<?php include 'include.php';

$Inquiry_ID = $_GET['Inquiry_ID'];


$query3 = "
SELECT 
  First_Name, Last_Name, Username, Age, Gender, Profession, Apt_type
FROM
  users JOIN userinfo
ON
  users.Inquiry_ID = userinfo.Inquiry_ID
  
 WHERE
  userinfo.Inquiry_ID='$Inquiry_ID'";
  
$result3 = $conn->query($query3);
$row=$result3->fetch_assoc();

$Firstname=$row["First_Name"];
$Lastname=$row["Last_Name"];
$Username=$row["Username"];
$Age=$row["Age"];
$Gender=$row["Gender"];
$Profession=$row["Profession"];
$Apt_type=$row["Apt_type"];

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/Inquery.css">
</head>
<body>
   <div class="form">
      <div class="header">
         <h2>Inquiry Form</h2>
      </div>
      <div class="login">
         <form action="update.php" method="post">
            <ul>
			   <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" value="<?php echo $Firstname; ?>" name="Firstname"/>
                  </li>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" value="<?php echo $Lastname; ?>" name="Lastname"/>
                  </li>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" value="<?php echo $Username; ?>" name="Username"/>
                  </li>
               <li>
                  <span class="un"><i class="fa fa-user"></i></span><input type="number" required class="text" value="<?php echo $Age; ?>" name="Age"/>
               </li>
               <li>
                  <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" value="<?php echo $Profession; ?>" name="Profession"/>
               </li>
               <li>
                  <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" value="<?php echo $Apt_type; ?>" name="Apt_type"/>
               </li>
               <li>
                  <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" value="<?php echo $Gender; ?>" name="Gender"/>
               </li>
               <li><input hidden value="<?php echo $Inquiry_ID; ?>" name="Inquiry_ID"/></li>
               <li>
                  <input type="submit" value="Update" class="btn">
               </li>
            </ul>
         </form>
         
      </div>
      <br/>
   </div>
</body>
</html>
