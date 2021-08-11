<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Assignments Page</title>
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

  h4{
  color: white;
  }

  .assignment{

  color: white;
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
  <h1 class='header'>Assignments</h1><?php
        session_start();
        $CourseID= $_GET['CourseID'];
        
         if($CourseID=='1'){
         echo "<div class='container'>";
        echo "<div class='child'>";
        echo "<div>";
         include 'Course1menu.php';
         echo "</div>";
         echo"</div>";
        //include course 1 menu file if web programming class
         }

          ?>
  <div class='child'>
    <div class='assignment'>
      <form action='Assignments.php?CourseID=1' method='post' enctype="multipart/form-data">
        <h4>Your most recent submission will be the one that is graded as long as it is before the due date.</h4><br>
        <p>Which assignment are you uploading?</p><br>
        <input type='radio' value='HW1' id='HW1' name='radio'> <label for='HW1'>Homework 1</label><br>
        <input type='radio' value='HW2' id='HW2' name='radio'> <label for='HW2'>Homework 2</label><br>
        <br>
        <p>Please upload your assignment file</p><input type='file' name='file'> <input type='submit' name='submit' value='Submit Assignment'>
     <!-- Upload form here -->
      </form>
    </div>
  </div><?php
         $host="localhost";
                $user="get26";
                $password="Student_4191025";
                $dbname="get26";
                $connect=mysqli_connect($host,$user,$password,$dbname);
                //connects to MYSQL
                
                $targetDir = "uploads/";
                $fileName = basename($_FILES["file"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
                //specifies which directory to put the uploaded file
                
                
                if($_POST){
                
                $assignmentname=$_POST['radio'];
                if(empty($_POST['radio'])){
                echo "<h4 style='color:black;'> Error: Please select which assignment you are uploading</h4> </h4>";
                }
                //Checks that an assignment option is picked
                if(empty($_FILES["file"]["name"])){
                echo "<h4 style='color:black;'> Error: Please Upload a file</h4> </h4>";
                //Checks that a file is uploaded
                }
                if(!empty($assignmentname) && !empty($_FILES["file"]["name"])){
                $fileTypes = array('doc','php','pdf');
                //specifies the accepted file types
                
                $query1="Insert into Assignment(AssignmentName,FileName,UploadDate,CourseID) values ('{$assignmentname}','{$fileName}',NOW(),'1')";
                $result= mysqli_query($connect, $query1);
                if(!$result){
        die("Database query failed.");
        }
        //Notifies the user if there is an issue with the SQL query
        
        if($result){
        echo "<h4 style='color:black;'> Thank you for your submission! </h4>";
        //Uploads file to database and confirms with user
        }
        
        }
        
         if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

        echo "Your assignment, ". basename( $_FILES["file"]["name"]). " has been uploaded for grading.";
//Uploads file to server and confirms with the user
    } 
                }
                
                // source: https://www.codexworld.com/upload-store-image-file-in-database-using-php-mysql/
                // source: https://www.w3schools.com/php/php_file_upload.asp
                ?>
</body>
</html>
