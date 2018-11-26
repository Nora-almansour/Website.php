<?php 
 
  include_once("dbConn.php"); 
  session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST 
 
?>
 
<?php
     $uname = $_POST['name'];
     $pass = $_POST['pwd']; 
     $sql = "SELECT * FROM Operator WHERE(username='".$uname."' and  password='".$pass."')";
     $qury = mysql_query($sql);
     $result = mysql_fetch_array($qury);
 
      if($result[0]>0)
      {
        echo "Successful Login!";
        $_SESSION['userName'] = $uname; // userName ist name of colum ?!
         $_SESSION['passWord'] = $pass;
        echo "<br />Welcome ".$_SESSION['userName']."!"; // did not show welcome !
        
        header('Location: http://appdevksa.com/index.php');
        
        //echo "<br /><a href='signinform.php'>SignIn</a>";
       // echo "<br /><a href='logout.php'>LogOut</a>"; // what its ur point ?
      }
      else
      {
        echo "Login Failed";
        echo "<br /><a href='signupform.php'>SignUp</a>"; // ?!
        echo "<br /><a href='signinform.php'>SignIn</a>";
      }
?>

