<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
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


	<h1 class='header'> Assignments </h1>
	
	<?php
	session_start();
	$CourseID= $_GET['CourseID'];
	
	 if($CourseID=='2'){
	 echo "<div class='container'>";
	echo "<div class='child'>";
	echo "<div>";
	 include 'Course2menu.php';
	 echo "</div>";
	 echo"</div>";
	//include Neuroscience menu
	 }

	  ?>
	   <div class='child'>
<div class='assignment'>
	 <form action='Assignments2.php?CourseID=2' method='POST' enctype="multipart/form-data">
	 <h4>Your most recent submission will be the one that is graded as long as it is before the due date.</h4>
	
	 <br>
	 <p>Which assignment are you uploading?</p>
	 <br><input type='radio' value='Exam1' id='exam1' name='radio'>
	 <label for='exam1'> Exam 1 </label><br>
	 <input type='radio' value='Exam2' id='exam2' name='radio'>
	 <label for='exam2'> Exam 2 </label><br><br>
	 <p>Please upload your assignment file</p>
	 
	 <input type='file' name='file' id='file'>
	 
	  <input type='submit' name='submit' value='Submit Assignment'>
	  </form>
	 </div>
	 </div>
	 </div>
	 </div>
	
	<?php
	 $host="localhost";
		$user="get26";
		$password="Student_4191025";
		$dbname="get26";
		$connect=mysqli_connect($host,$user,$password,$dbname);
		
		
		$targetDir = "uploads/";
		$fileName = basename($_FILES["file"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = strtolower(pathinfo($targetFilePath,PATHINFO_EXTENSION));
		//specifies which directory the uploaded file will be placed
		if($_POST){
		
		$assignmentname=$_POST['radio'];
		if(empty($_POST['radio'])){
		echo "<h4 style='color:black;'> Error: Please select which assignment you are uploading</h4> </h4>";
		//user must select an assignment to upload
		}
		
		if(empty($_FILES["file"]["name"])){
		echo "<h4 style='color:black;'> Error: Please Upload a file</h4> </h4>";
		//user must upload a file
		}
		if(!empty($assignmentname) && !empty($_FILES["file"]["name"])){
		$fileTypes = array('doc','php','pdf');
		//specifies file types
		
		$query1="Insert into Assignment(AssignmentName,FileName,UploadDate,CourseID) values ('{$assignmentname}','{$fileName}',NOW(),'2')";
		$result= mysqli_query($connect, $query1);
		if(!$result){
	die("Database query failed.");
	}
	
	if($result){
	echo "<h4 style='color:black;'> Thank you for your submission! </h4>";
	//confirms submission with user
	}
	
	}
	
	 if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

        echo "Your assignment, ". basename( $_FILES["file"]["name"]). " has been uploaded for grading.";
//uploads the file to the source
    } 
		}
		// source: https://www.codexworld.com/upload-store-image-file-in-database-using-php-mysql/
		// source: https://www.w3schools.com/php/php_file_upload.asp
		?>
	
	
	
	
	

	
	
		
			
		
	</body>
	</html>