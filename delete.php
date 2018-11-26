<html><head><title>Flight DataBase</title>
<link href="style.css" rel="stylesheet" type="text/css" /></head>
<body><div id="header"> <div id="menu_bar">
<ul><li><a href="index.php">HOME</a></li> <li><a href="displayData.php"> VIEW RECORDS</a></li></ul>  // Use the <ul> tag together with the <li> tag to create unordered lists.
</div> <!-- end of menu bar --></div><div id="container">
<?php
session_start();
if (!isset($_SESSION['userName']) || $_SESSION['passWord'] == '') { // if update.php access from onther not oprater and isset mean Determine if a variable is set
	header ("Location: signinform.php");  // should return him to signinform.php
    exit();
}
include_once("dbConn.php"); 
$query = "SELECT * FROM Flight";
$result=mysql_query($query) or die("Query Failed : ".mysql_error()); // data returned by the mysqli_query() function in the $result variable.
$i=0;
while($rows=mysql_fetch_array($result)) //use the mysqli_fetch_array() function to return the first row from the recordset as an array. Each call to mysqli_fetch_array() returns the next row in the recordset.
{
$name[$i]=$rows['F_Id'];
$i++;
}
$total_elmt=count($name);
?>
<center>
<form method="POST" action=""> <h2>Select Flight No. to Delete: </h2>
Select the F_Id to Delete: <select name="F_Id">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $name[$j];
?></option><?php
}
?>
</select><br />
<input name="submit" type="submit" value="Delete"/><br />

<?php

if(isset($_POST['submit']))
{
$F_Id=$_POST['F_Id'];


$query = "DELETE FROM Flight WHERE F_Id='$F_Id'";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
echo "Successfully Deleted!";
}


?>

</form>
<img src="container.gif" alt="" width="700" />	
</div>

</body></html>
