<?PHP
session_start();
if (!(isset($_SESSION['userName'])&& $_SESSION['passWord'] != '')) {// if insertdata.php access from onther not oprater and isset mean Determine if a variable is set
	header ("Location: signinform.php");  // should return him to signinform.php
}
?>
<html>
<head>
<title>Flight DataBase</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"> 
    <div id="menu_bar">
        <ul>
            <li><a href="form.php" class="current">Insert</a></li>
            <li><a href="search.php" target="_parent">Search</a></li>
            <li><a href="update.php" target="_parent">Update</a></li>
            <li><a href="delete.php" target="_parent">Delete</a></li>  
            <li><a href="displayData.php">View Records</a></li> 
            <li><a href="logout.php"> LogOut</a></li>                     
        </ul>        
    </div> <!-- end of menu bar -->
</div>
<div id="container">
<br/> <br/>
<center> 
<?php
  $F_Id=$_POST['F_Id'];
 $City=$_POST['City'];
 $Date=$_POST['Date'];
  $Type=$_POST['Type'];
 $Time=$_POST['Time'];
$Status=$_POST['Status'];

    // connect to server 
    $conn = mysql_connect("localhost","appdevks_Nora","Wafasaad123","appdevks_Nora"); // user appdevks_Nora & it psw Wafasaad123 & name of db appdevks_Nora

    // check if you can connect; if not then die

    if (!$conn) {
        echo "<center>";
        die('Could Not Connect: ' . mysql_error());
        echo "</center>";
    }

    // check if you can select table; in not then die

    $db = mysql_select_db('appdevks_Nora', $conn);

    if (!$db) {
        echo "<center>";
        die('Database Not Selected: ' . mysql_error());
        echo "</center>";
    }

    // check if above variables are empty 
    if (!empty($F_Id) and !empty($City) and !empty($Date) and !empty($Type) and !empty($Time) and !empty($Status)) {
        // Define the query to insert the flight request
    $insert = mysql_query("INSERT INTO Flight (F_Id, City, Date, Type ,Time ,Status) VALUES ('$F_Id', '$City', '$Date', '$Type', '$Time', '$Status' )");  

        if($insert) {
          echo "<center>";
          echo "Successfully Inserted <br>";
          echo "</center>";
        }
    }
    else {
        echo "<center>";
        die("You Can't insert in this way :)");
        echo "</center>";
    }

    // close the connection to the server
    mysql_close($conn);



?>
<br/>
<br/><hr/>  <address ><center>Copyright &copy; Mobile Airport Information Systems Application </center></address>   
</body></html>