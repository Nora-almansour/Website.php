<?php
 
	session_start(); # Starts the session
 
	session_unset(); #removes all the variables in the session
 
	session_destroy(); #destroys the session
 
	if(!$_SESSION['userName'])
   		echo "Successfully logged out!<br />";
	else
   		 echo "Error Occured!!<br />";
 
?>