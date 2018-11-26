<html>

<head>
<title>Flight DataBase</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>


<body>

<div id="header"> // div tag for division certain things and header name of pic
    <div id="menu_bar">
  
    </div> <!-- end of menu bar -->
</div>

<div id="container">

<br/> <br/>
<center> <form action="signin.php" method="post"> //post; data from Clint(browser)to web server in message body | get; required data from clint will show on in the URL which not secure
       
       <fieldset><legend> <h2>Operator Login Form</h2></legend> // The fieldset tag is used to group related elements in a form. and The legend tag defines a caption for the fieldset element and supported in all major browsers.
</br>
<label> UserName  :
               <input type="text" name="name">
<label><br/>

<label> Password :
              <input type="password" name="pwd"><br />
<label>
              <input type="submit">
            </fieldset>
            <img src="container.gif" alt="" width="300" />
       </form>
  <hr/>  
  <address ><center>Copyright &copy; Mobile Airport Information Systems Application </center></address>
   
</body>

</html>