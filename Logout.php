<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log Out Page</title>
	<meta name="author" content="Gia Thurton">
	<meta name="description" content="This is my Midterm Project">
	<style> 
	body {
  background-image: url('Login.png');
  }
	h2 {
	height: 75px;

 
 text-align: center;
 font-size: 25px;
 color: white;
width: 300px;
  border: 15px solid white;
  padding: 50px;
  margin: auto;
  background-color: #080326;
	}
	
	
	
	</style>
	
</head>
<body class="body">
		<?php
 session_start();
 
 unset($_SESSION["username"]);
  session_destroy();   // function that Destroys Session and logs the user out
   echo '<h2>Logging you out...</h2>';
   header('Refresh: 2; URL = LogInPg.php');
   //reroutes the user back to the log in page
?>
	</body>
	</html>