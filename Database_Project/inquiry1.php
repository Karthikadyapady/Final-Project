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
            <form action="display.php" method="post">
                <ul>
                    <li>
                        <span class="un"><i class="fa fa-user"></i></span>
                        <input type="text" required class="text" placeholder="First Name" name="Firstname" />
                    </li>
                    <li>
                        <span class="un"><i class="fa fa-user"></i></span>
                        <input type="text" required class="text" placeholder="Last Name" name="Lastname" />
                    </li>
                    <li>
                        <span class="un"><i class="fa fa-user"></i></span>
                        <input type="text" required class="text" placeholder="Username" name="Username" />
                    </li>
                    <li>
                        <span class="un"><i class="fa fa-birthday-cake"></i></span>
                        <input type="number" pattern="0-9" required class="text" placeholder="Age" name="Age" />
                    </li>
                    <li>
                        <span class="un"><i class="fa fa-suitcase"></i></span>
                        <input type="text" required class="text" placeholder="Profession" name="Profession" />
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
                    <li>
                        <input type="submit" value="Submit" class="btn">
                    </li>
                </ul>
            </form>

        </div>
        <br/>
    </div>
</body>

</html>
