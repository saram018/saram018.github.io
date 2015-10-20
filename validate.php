<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assg1.css">
</head>
<body>

<div id="header">
<img src="paint.png" alt="Sara" align="left" width="120" height = "120"/>
<h2>Assg.1: CSS,JavaScript,and Forms</h2>
<h4>Brought to you by Sara Merheb</h4> 
</div>

<div id="nav">
<ul>
<li onclick="location.href='index.html';">Home</li>
<li onclick="location.href='about.html';">About Me</li>

<li>Courses
	<ul>
      <li>Web Development</li>
      <li>Databases</li>
      <li>Networks</li>
	  <li>Algorithms</li>
	  <li> Operating Systems</li>
	  
 </ul>
</li>

<li onclick="location.href='guestbook.html';">Guest Book</li>
</ul>
</div>

<div id="section">

<?php

 
    $user = $_POST['uname'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $message = $_POST['msg'];

 
    // include db connect class
    require_once('/home/a1604491/public_html/db_connect.php');
 
    // connecting to db
    $db = new DB_CONNECT();
    $query = mysql_query("SELECT Username FROM User WHERE Username='$user'");
	if (mysql_num_rows($query) == 0)
	{
		$result = mysql_query("INSERT INTO User(Username,Firstname,Lastname,Email,Message)
			VALUES('$user', '$fname','$lname','$email','$message')");
	 
	echo  "User successfully added.";
	} else{
		echo "Username Already Exists, Try Another";
	    
	}

?>


</div>

<div id="ad">
<img style=" position: absolute;
    margin: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;" src="bmw.jpg" alt="Ad" width="140" height = "400">
</div>

<div id="footer">
CSC 443, Assg 1, Fall 2015
</div>

 
 
</html>
