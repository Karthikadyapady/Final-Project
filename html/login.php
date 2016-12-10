<!DOCTYPE html>
<html lang="en-us">
   <meta charset="utf-8" />
   <head>
      <title>Inquiry Form</title>
      <link rel="stylesheet" href="css/Inquery.css">
   </head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="form">
         <div class="header">
            <h2>Inquiry Form</h2>
         </div>
         <div class="login">
            <form action="admin.php">
               <ul>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="UserName" pattern="admin" oninvalid="this.setCustomValidity('Please Enter valid Username')" valid. oninput="setCustomValidity('')" name="Firstname"/>
                  </li>
                  <li>
                     <span class="un"><i class="fa fa-user"></i></span><input type="password" required class="text" placeholder="Password" oninvalid="this.setCustomValidity('Password invalid')" valid. oninput="setCustomValidity('')" pattern="admin" name="Password"/>
                  </li>
                 
            
           
                  <li>
                     <input type="submit" value="Login" class="btn">
                  </li>
               </ul>
            </form>
            
         </div>
         <br/>
      </div>
   </body>
</html>