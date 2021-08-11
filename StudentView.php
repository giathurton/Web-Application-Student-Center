<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Student View Page</title>
  <meta name="author" content="Gia Thurton">
  <meta name="description" content="Final Project">
  <style>

  body {
  background-image: url('Chanelblur.png');
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

  table, th, td {
    border: 1px solid #080326;
    background-color: #eee;
    border-collapse: collapse; 
    
  }

  table{
  width: 100%;  
  text-align: center;
  }

  td{
  width: 33.3%;  
  }


  .container {
    
    padding: 20px;
  }

  .child {
    width: 30%;
    float: left;
    padding: 20px;
    
  }  
  
  th{
background-color: #080326;
color: white;
}

#first{
width: 30%;
}
#second{
width: 50%;
}

  </style>
</head>
<body class="body">
  <div class="menubar">
    <a href="Home.php">Home</a>
     <a href="Courseview.php">Courses</a>
      <a href="Calendar.html">Calendar</a> 
      <a href="Logout.php">Log Out</a>
  </div>
  <h1 class='header'>Students</h1><?php
        session_start();
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
  $host="localhost";
  $user="get26";
  $password="Student_4191025";
  $dbname="get26";
                
                
  $connect=mysqli_connect($host,$user,$password,$dbname); 
                

  $sql = "SELECT StudentID, Fname, Lname, Email FROM Student";
  //query to display the students in the class
  $result = $connect->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
   // displays results in a table
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["StudentID"]. "</td><td>" . $row["Fname"]. " " . $row["Lname"]. "</td><td>" . $row["Email"]. "</td></tr>" ;
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  $connect->close();
   echo "</div>";
         echo "</div>";
         echo "</div>";

         }
         if($CourseID=='2'){
         //same thing for neuroscience class
         echo "<div class='container'>";
        echo "<div class='child' id='first'>";
        echo "<div>";
         include 'Course2menu.php';
         echo "</div>";
         
         echo"</div>";
         echo "<div class='child id='second'>";
         echo "<div>";
        $host="localhost";
        $user="get26";
        $password="Student_4191025";
                $dbname="get26";
                
                
                $connect=mysqli_connect($host,$user,$password,$dbname); 
                

  

  $sql = "SELECT StudentID, Fname, Lname, Email FROM Student";
  $result = $connect->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    //displays results in a table
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["StudentID"]. "</td><td>" . $row["Fname"]. " " . $row["Lname"]. "</td><td>" . $row["Email"]. "</td></tr>" ;
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  $connect->close();
   echo "</div>";
         echo "</div>";
         echo "</div>";
         }
         
          ?><?php

        
  ?>
</body>
</html>
