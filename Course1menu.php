<!DOCTYPE html>
<?php
session_start();
$_SESSION['CourseID']=$CourseID;
?>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
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
  <title></title>
</head>
<body class="body">
  <div class="coursemenu">
    <a href="Coursehome.php?CourseID=1" class="Coursename">Web Programming</a>
     <a href="Syllabus1.html">Syllabus</a> 
     <a href="Professor.php?CourseID=1">Professor</a> 
     <a href="Modules.php?CourseID=1">Announcements</a> 
     <a href="Assignments.php?CourseID=1">Assignments</a> 
     <a href="Grades.php?CourseID=1">Grades</a> 
     <a href="StudentView.php?CourseID=1">Students</a>
  </div>
</body>
</html>
