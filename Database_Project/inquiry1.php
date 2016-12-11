1
<!DOCTYPE html>
2
<html lang="en-us">
3
<meta charset="utf-8" />

<head>
6
    <title>Inquiry Form</title>
7
    <link rel="stylesheet" href="css/Inquery.css">
8
</head>
9
<meta name="viewport" content="width=device-width, initial-scale=1.0">
10
</head>
11
​
12
<body>
13
    <div class="form">
14
        <div class="header">
15
            <h2>Inquiry Form</h2>
16
        </div>
17
        <div class="login">
18
            <form action="display.php" method="post">
19
                <ul>
20
                    <li>
21
                        <span class="un"><i class="fa fa-user"></i></span>
22
                        <input type="text" required class="text" placeholder="First Name" name="Firstname" />
23
                    </li>
24
                    <li>
25
                        <span class="un"><i class="fa fa-user"></i></span>
26
                        <input type="text" required class="text" placeholder="Last Name" name="Lastname" />
27
                    </li>
28
                    <li>
29
                        <span class="un"><i class="fa fa-user"></i></span>
30
                        <input type="text" required class="text" placeholder="Username" name="Username" />
31
                    </li>
32
                    <li>
33
                        <span class="un"><i class="fa fa-birthday-cake"></i></span>
34
                        <input type="number" pattern="0-9" required class="text" placeholder="Age" name="Age" />
35
                    </li>
36
                    <li>
37
                        <span class="un"><i class="fa fa-suitcase"></i></span>
38
                        <input type="text" required class="text" placeholder="Profession" name="Profession" />
39
                    </li>
40
                    <li>
41
                        Gender
42
                        <div class="span"><span class="ch"><input type="radio" name="Gender" value="male" required> Male<br>
43
                  <input type="radio" name="Gender" value="female"> Female<br></span>
44
                        </div>
45
                    </li>

