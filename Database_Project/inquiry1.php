Dan's Tools
cleancss.com/html-beautify
HTML Formatter
Development
Encode/Decoders
Formatters
Images
Internet
Minifiers
SEO
Related: CSS FormatterJavascript FormatterPHP Formatter
     


1
<!DOCTYPE html>
2
<html lang="en-us">
3
<meta charset="utf-8" />
4
​
5
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

Format Code




HTML <style>, <script> formatting: End script and style with newline?  Detect packers and obfuscators?  Keep array indentation?  Break lines on chained methods?  Space before conditional: "if(x)" / "if (x)"  Unescape printable chars encoded as \xNN or \uNNNN?  Use JSLint-happy formatting tweaks?
HTML Formatter
Enter your messy, minified, or obfuscated HTML into the field above to have it cleaned up and made pretty. The editor above also contains helpful line numbers and syntax highlighting. There are many option to tailor the beautifier to your personal formatting tastes.

When do you use HTML Formatter
Often when writing HTML your indentation, spacing, and other formatting can become a bit disorganized. It is also common for multiple developers to work on a single project who have different formatting techniques.  This tool is helpful for making the formatting of a file consistent. It is also common for HTML to be minified or obfuscated. You can use this tool to make that code look pretty and readable so it is easier to edit.

Examples
The minified HTML below:

                                                    <ul class="dropdown-menu">
<li><a href="/javascript-minify">Javascript Minify</a></li><li><a href="/css-minify">CSS Minify</a></li><li><a href="/css-beautify">CSS Beautify</a></li><li><a href="/javascript-beautify">Javascript Beautify</a></li><li><a href="/html-beautify">HTML Beautify</a></li><li><a href="/perl-beautify">Perl Beautify</a></li><li><a href="/php-beautify">PHP Beautify</a></li><li><a href="/go-beautify">GO Beautify</a></li><li><a href="/ruby-beautify">Ruby Beautify</a></li><li><a href="/sql-beautify">SQL Beautify</a></li><li><a href="/xml-beautify">XML Beautify</a></li></ul>
Becomes this beautified :

<ul class="dropdown-menu">
    <li><a href="/javascript-minify">Javascript Minify</a>
    </li>
    <li><a href="/css-minify">CSS Minify</a>
    </li>
    <li><a href="/css-beautify">CSS Beautify</a>
    </li>
    <li><a href="/javascript-beautify">Javascript Beautify</a>
    </li>
    <li><a href="/html-beautify">HTML Beautify</a>
    </li>
    <li><a href="/perl-beautify">Perl Beautify</a>
    </li>
    <li><a href="/php-beautify">PHP Beautify</a>
    </li>
    <li><a href="/go-beautify">GO Beautify</a>
    </li>
    <li><a href="/ruby-beautify">Ruby Beautify</a>
    </li>
    <li><a href="/sql-beautify">SQL Beautify</a>
    </li>
    <li><a href="/xml-beautify">XML Beautify</a>
    </li>
</ul>
© Dan's Tools | Contact | About | For more dev tools, check out danstools.com
