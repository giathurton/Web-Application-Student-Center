<!doctype html>
<?php
session_start();
$_SESSION['CourseID']=$CourseID;
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="author" content="Gia Thurton">
	<meta name="description" content="Final Project">
	<style> 
.coursemenu {
  width: 200px; 
  /* Sets width of the menu */
}

.coursemenu a {
  background-color: #eee; 
  color: black; 
  display: block; 
  padding: 12px; 
  /* Sets background color of the menu */
}

.coursemenu a:hover {
  background-color: #ccc;
}

.coursemenu a.Coursename {
  background-color: #080326; 
  color: white;
   /*Sets background color of the first row of the menu */
}
	
	
	</style>
	
</head>
<body class="body">




<div class="coursemenu">
  <a href="Coursehome.php?CourseID=2" class="Coursename">Neuroscience</a>
  <a href="Syllabus2.html">Syllabus</a>
  <a href="Professor.php?CourseID=2">Professor</a>
  <a href="Modules.php?CourseID=2">Announcements</a>
  <a href="Assignments2.php?CourseID=2">Assignments</a>
  <a href="Grades.php?CourseID=2">Grades</a>
  <a href="StudentView.php?CourseID=2">Students</a>

</div>
		
	</body>
	</html>