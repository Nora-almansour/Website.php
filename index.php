<?PHP
session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST 

if (!(isset($_SESSION['userName'])&& $_SESSION['passWord'] != '')) { // if index.php access from onther not oprater and isset mean Determine if a variable is set
	header ("Location: signinform.php");  // should return him to signinform.php
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  //Specifies the character encoding for the document.
<title>Flight DataBase</title>
<meta name="description" content="Flight DataBase,Flight information" />  //content attribute above must match the value of the title attribute on a link
<link href="style.css" rel="stylesheet" type="text/css" />


<body >
<div id="header"> 
    <div id="menu_bar">
        <ul>
            <li><a href="form.php" class="current">Insert</a></li> // class="current" identifying which page you are on and there is no point of it right now
            <li><a href="search.php" target="_parent">Search</a></li>
            <li><a href="update.php" target="_parent">Update</a></li>
            <li><a href="delete.php"_parent">Delete</a></li>  
            <li><a href="displayData.php">View Records </a></li> 
            <li><a href="logout.php"> LogOut</a></li>                     
        </ul> 
    </div> <!-- end of menu bar -->
</div>
	
<div id="container"><img src="container.gif" alt="" width="700" />
	
</div>
</body>
</head>
</html>