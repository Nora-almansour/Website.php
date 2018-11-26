<html><head><title>Flight DataBase</title>
</head><body><div id="header"> <div id="menu_bar"> 
<ul> <li><a href="index.php">HOME</a></li>
<li><a href="displayData.php"> VIEW RECORDS</a></li></ul>
</div> <!-- end of menu bar -->
</div><div id="container">
<?php
session_start();
if (!isset($_SESSION['userName']) || $_SESSION['passWord'] == '') {
    header ("Location: signinform.php");
    exit();
}
$con=mysqli_connect("localhost","appdevks_Nora","Wafasaad123","appdevks_Nora");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT Id,F_Id,City,Date,Time,Status FROM Flight where Type='Arrival' ORDER BY date");
echo "<table border='1' align='center' >
<h2> Arriving Flights : </h2>
<tr>
<th>F_Id</th>
<th>City</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>


</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['F_Id'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Time'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$result = mysqli_query($con,"SELECT F_Id,City,Date,Time,Status FROM Flight where Type='Departure' ORDER BY date ");
echo "<table border='1' align='center' >
<h2> Departing Flights : </h2>
<tr>
<th>F_Id</th>
<th>City</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['F_Id'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['Time'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>

</body></html>