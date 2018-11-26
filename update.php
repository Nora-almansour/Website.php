<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flight DataBase</title>
<meta name="description" content="Flight DataBase,Flight information" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header"> 
    <div id="menu_bar">
    
    <ul> // Use the <ul> tag together with the <li> tag to create unordered lists.
                  
        <li><a href="index.php">HOME</a></li>
        <li><a href="displayData.php"> VIEW RECORDS</a></li> 
        
        </ul>  
  
    </div> <!-- end of menu bar -->
</div>

<div id="container">

<?php
session_start();
if (!isset($_SESSION['userName']) || $_SESSION['passWord'] == '') {// if update.php access from onther not oprater and isset mean Determine if a variable is set
	header ("Location: signinform.php");  // should return him to signinform.php
    exit();
}

$server="localhost";
$username="appdevks_Nora";
$password="Wafasaad123";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("appdevks_Nora",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM Flight";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$roll[$i]=$rows['F_Id'];
$i++;
}
$total_elmt=count($roll);
?>
<form method="POST" action="">
Select the F_Id No. to Update: <select name="F_Id">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $roll[$j];
?></option><?php
}
?>
</select><br />
Time: <input name="Time" type="text" /><br />
Status: <input name="Status" type="text" /><br />
<input name="submit" type="submit" value="Update"/><br />
<input name="reset" type="reset" value="Reset"/>
</form>

<?php

if(isset($_POST['submit']))
{
$value=$_POST['F_Id'];
$Time=$_POST['Time'];
$Status=$_POST['Status'];


$query2 = "UPDATE Flight SET Status='$Status',Time='$Time' WHERE F_Id='$value'";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
echo "Successfully Updated";
}
?>

<img src="container.gif" alt="" width="700" />
	
</div>