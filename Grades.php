<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Grades Page</title>
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
  color:black;
  }

  .link{
  color: blue;
  }
  table, th, td {
    border: 1px solid #080326;
    background-color: #eee;
    text-align: center;
    /*Styling for the Grades table */
  }

  table{
  width: 100%; 
  border-collapse: collapse; 
  }

  td{
  width: 45%;  
  }
  th{
  background-color: #080326;
  color: white;
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
  <h1 class='header'>Grades</h1><?php
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
        
         
        
         
         $sqlq="SELECT Fname,Lname,Value,AssignmentName,FileName,UploadDate FROM Grade INNER JOIN Assignment ON Grade.AssignmentID=Assignment.AssignmentID INNER JOIN Student ON Grade.StudentID=Student.StudentID Where Grade.StudentID=1 AND CourseID=1";
        //query to display web programming grades. You are signed in as student with student ID 1.
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
         
         
        
         $sqlq="SELECT Fname,Lname,Value,AssignmentName,FileName,UploadDate FROM Grade INNER JOIN Assignment ON Grade.AssignmentID=Assignment.AssignmentID INNER JOIN Student ON Grade.StudentID=Student.StudentID Where Grade.StudentID=1 AND CourseID=2";
         //query to display neuroscience grades
         }
         
          ?><?php 
                session_start();
                
                $host="localhost";
                $user="get26";
                $password="Student_4191025";
                $dbname="get26";
                $connect=mysqli_connect($host,$user,$password,$dbname);
                //connects to database
                
              
                $result= mysqli_query($connect, $sqlq);
                //loads query into database
                if(!$result){

        die("Database query failed.");
        }
        //notifies user if SQL query fails        
        
  $row;
        
        if ($result->num_rows > 0) {
    echo "<table><tr><th>Student Name</th><th>Grade</th><th>Assignment Name</th><th>File Name</th><th>Upload Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo "<tr><td>" . $row["Fname"]. " " . $row["Lname"] . "</td><td>". $row["Value"] . "</td><td>". $row["AssignmentName"]. "</td><td>". $row["FileName"]. "</td><td>". $row["UploadDate"]. "</td></tr>" ;


    }
    echo "</table>";
    echo"</div>";
                echo"</div>";
  }
  echo "</div>";
         echo "</div>";
         echo "</div>";
         echo "</div>";

  ?>
</body>
</html>
