<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
<title>Inquiry Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/Inquery.css">
</head>

<body>

<!-- Connecting to the database -->
<?php include 'include.php';?>

<div class="form">
   <div class="header">
      <h2>Inquiry Form</h2>
   </div>
   <div class="login">
      <form action="display.php" method="post">
         <ul>
            <li>
               Select your Username:
               <div class="span">
                  <span class="ch">
                     <!-- List of all the usernames -->
                     <select class="label" name="Username">
                     <?php 
                        $query1 = "SELECT Username from users";
                        $result1 = $conn->query($query1);
                        $i=1;
                        while ($usernames = $result1->fetch_assoc()) {
                        $query2 = "SELECT Username from users WHERE Inquiry_ID=$i";
                        $result2 = $conn->query($query2);
                        $row=$result2->fetch_assoc();
                        $username=$row["Username"];
                        /* Generating dropdown options */
                        echo "<option value=\"".$i."\">".$username."</option>";
                        $i++;
                        }
                        ?>
                     </select>
                     <br>
                  </span>
               </div>
            </li>
            <li>
               <span class="un"><i class="fa fa-birthday-cake"></i></span><input type="number" pattern="0-9"required class="text" placeholder="Age" name="Age"/>
            </li>
            <li>
               <span class="un"><i class="fa fa-suitcase"></i></span><input type="text" required class="text" placeholder="Profession" name="Profession"/>
            </li>
            <li>
               Gender
               <div class="span"><span class="ch"><input type="radio" name="Gender" value="male" required> Male<br>
                  <input type="radio" name="Gender" value="female"> Female<br></span> 
               </div>
            </li>
            <li>
               Apartment type:
               <div class="span">
                  <span class="ch">
                     <select name="Apt_type">
                        <option value="Studio" class="">Studio</option>
                        <option value="1BHK">1BHK</option>
                        <option value="2BHK">2BHK</option>
                        <option value="3BHK">3BHK</option>
                     </select>
                     <br>
                  </span>
               </div>
            </li>
            <input type="submit" value="SUBMIT" class="btn">
            </li>
         </ul>
      </form>
   </div>
   <br/>
</div>
</body>
</html>