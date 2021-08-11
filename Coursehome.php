<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Course Home Page</title>
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
    width: 27%;
    float: left;
    padding: 25px;
    /*aligns the elements on the page */
  }  

  .coursehead{
  text-align: right;
  color:white;
  }
  
  h2{
  padding-left: 20px;
  /*Aligns the header center */
  }
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 70%;
  text-align: center;
  background-color: #080326;
  /* Source: https://www.w3schools.com/howto/howto_css_profile_card.asp */
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
  <h1 class='header'>Course Home</h1>
  <div class='Coursemenu'>
    <?php
        $CourseID= $_GET['CourseID'];
        if($CourseID=='1'){
        echo "<div class='container'>";
        echo "<div class='child'>";
        echo "<div>";
         include 'Course1menu.php';
         echo "</div>";
         
         echo"</div>";
         echo "<div class='child'>";
         echo "<div>";
         echo "<h2 class='coursehead'>      Welcome to Web Programming! </h2>";
         echo "<div class='card'>";
         echo "<img src='WP.png' alt='WP'>";
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
         echo "<h2 class='coursehead'>     Welcome to Intro to Neurology! </h2>";
         echo "<img src='neuro.png' alt='Neurology'>";
         echo "</div>";
         echo "</div>";
         echo "</div>";
         }
         
          ?>
  </div>

</body>
</html>
