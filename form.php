<?PHP
session_start();
if (!isset($_SESSION['userName']) || $_SESSION['passWord'] == '') {// if form.php access from onther not oprater and isset mean Determine if a variable is set
	header ("Location: signinform.php");  // should return him to signinform.php
    exit();
}

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> //Specifies the character encoding for the document.
<title>Flight DataBase</title>
<meta name="description" content="Flight DataBase,Flight information" /> //content attribute above must match the value of the title attribute on a link
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body >
<div id="header"> 
    <div id="menu_bar">
    
    <ul> // Use the <ul> tag together with the <li> tag to create unordered lists.
                  
        <li><a href="index.php">HOME</a></li>
        <li><a href="displayData.php"> VIEW RECORDS</a></li> 
        
        </ul>  
  
    </div> <!-- end of menu bar -->
</div>
	
<div id="container">

        <form action="insertdata.php" method="post"> //post; data from Clint(browser)to web server in message body | get; required data from clint will show on in the URL which not secure
F_Id: <input type="text" name="F_Id">
City: <input type="text" name="City">
Date: <input type="Date" name="Date"><br>
Type: <input type="text" name="Type">
Time: <input type="text" name="Time">
Status: <input type="text" name="Status"><br>
<input type="submit" align="center"> 
<img src="container.gif" alt="" width="700" />	
</div>
</body>
</html>