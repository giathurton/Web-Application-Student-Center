<!DOCTYPE html>
<?php
session_start();
$_SESSION['CourseID']=$CourseID;
?>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Course view Page</title>
  <meta name="author" content="Gia Thurton">
  <meta name="description" content="Final Project">
  <style>

  body {
  background-image: url('Chanelblur.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  /* sets background image and makes it fixed on the page so it does not repeat when scrolling */
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



  h3 {
  color:white;
  }

  a{
  color: white;
  font-size: 25px;
  text-align: center;
  }       
     .container {
    
    padding: 10px;
  }

  .child {
    width: 40%;
    float: left;
    padding: 65px;
    
  }  
  
  .link{
  display:block;
  text-align: center;
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
  <h1 class='header'>Courses</h1>
  <div class='container'>
  <div class='child'>
  <div>
  <!--Links to each class -->
      <img src="software.png" alt="Web Programming" style="width:100%"> <strong>
      <a class='link' href="Coursehome.php?CourseID=1">Web Programming</a></strong>
   </div>
   </div>
    <div class='child'>
    <div>
      <img src="science.png" alt="Neurology" style="width:100%"> <strong>
      <a class='link' href="Coursehome.php?CourseID=2">Neuroscience</a></strong>
 </div>
 </div>
 </div>
</body>
</html>
