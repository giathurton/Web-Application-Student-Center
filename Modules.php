<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Announcements Page</title>
	<meta name="author" content="Gia Thurton">
	<meta name="description" content="Final Project">
	<style> 
body {
  background-image: url('Chanelblur.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  }
  
  
  .menubar {
  background-color: #080326;
}

.menubar a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 16px;
  text-decoration: none;
  font-size: 18px;

}

.header {
text-align: center;
color: white;
}


.container {
    
    padding: 20px;
}

.child {
    width: 30%;
    float: left;
    padding: 20px;
    
}  

.coursehead{
text-align: center;
color:white;
}

.announcement{
text-align: center;
color:white;
}

.link{
color: blue;
}
	
	</style>
	
</head>
<body class="body">





<div class="menubar">
  <a class="active" href="Home.php">Home</a>
  <a href="Courseview.php">Courses</a>
  <a href="Calendar.html">Calendar</a>
  <a href="Logout.php">Log Out</a>
</div>


	<h1 class='header'> Announcements </h1>
	<?php
	session_start();
	$CourseID= $_GET['CourseID'];
	if($CourseID=='1'){
	echo "<div class='container'>";
	echo "<div class='child'>"; //open child
	echo "<div>"; //in child
	 include 'Course1menu.php';
	 
	 echo "</div>"; //close in child
	 
	 echo"</div>";// close child
	 echo "<div class='child'>";
	 echo "<div class='announcement'>";
	 echo "<h3 class='coursehead'> Welcome to Web Programming! </h3>";
	 echo "I am so excited to have you all as students this semester <br>";
	 echo "In order to excel in this class, you must study hard and start your work early.";
	  echo "<br>Please take full advantage of the university quiz database";
	 echo "<br>Click the link below and choose the 'Science: Computers' quiz to take.";
	 echo "<br><strong><a class='link' href='Quiz.php'>Quiz</a></strong>";
	 //links to Quiz API
	 echo "<br><br>Best,<br>";
	 echo "<br>Professor Linda Johnson";
	 echo "</div>";
	 echo "</div>";
	 echo "</div>";
	 echo "</div>";
	 }
	 if($CourseID=='2'){
	 echo "<div class='container'>";
	echo "<div class='child'>";
	echo "<div>";
	 include 'Course2menu.php';
	 echo "</div>";
	 echo"</div>";
	 echo "<div class='child'>";
	 echo "<div>";
	 echo "<h3 class='coursehead'> Welcome to Neurology! </h3>";
	 echo "<div class='announcement'>";
	 echo "In order to excel in this class, you must study hard.";
	 echo "<br>I suggest you sharpen your skills by taking the quizzes on the school quiz database.";
	 echo "<br>Click the link below and choose the 'Science & Nature' quiz to take.";
	 echo "<br><strong><a class='link' href='Quiz.php'>Quiz</a></strong>";
	 echo "<br><br>Best,<br>";
	 echo "<br>Professor Mark Roberts";
	 echo "</div>";
	 echo "</div>";
	 echo "</div>";
	 }
	 
	  ?>
	
	
	
	
	
	

	
	
		
			
		
	</body>
	</html>