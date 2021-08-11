<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Professor Page</title>
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

h3{
color:white;
}

.form{
color:white;
}

h4{
color: white;
}


table, th, td {
    border: 1px solid #080326;
    background-color: #eee;
    text-align: center;
}

table{
width: 30%; 
border-collapse: collapse; 
}

td{
width: 33.3%;  
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 70%;
  text-align: center;
  background-color: #080326;
}

.proflabel{
color:white;
text-align: center;
}

.prof{
text-align: center;
}

.container {
    
    padding: 20px;
}

.child {
    width: 27%;
    float: left;
    padding: 20px;
}  

th{
background-color: #080326;
color: white;
}

.checked {
  color: yellow;
}
.halfchecked{
 position: absolute;
    top: 0;
    left: 0;
    width: 8px;    
    color: yellow;
    
}
p {
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


	<h1 class='header'> Professor Info </h1>
	
	<?php
	session_start();
	$CourseID= $_GET['CourseID'];
	if($CourseID=='1'){
	echo "<div class='container'>";
	echo "<div class='child'>";
	echo "<div>";
	 include 'Course1menu.php';
	 echo "</div>";
	 echo"</div>";
	 echo "<div class='child'>";//open child
	 echo "<div>";//in child
	 echo "<div class='card'>";// in 2
  echo "<img src='prof1.jpeg' alt='Avatar' style='width:100%'>";
 
    echo "<h4 class='prof'><b>Linda Johnson</b></h4>";
    echo"<p class='proflabel'>Web Programmer</p>";


	 echo "</div>";//close in child
	 echo "</div>";// close in child 2
	 
	 $TeacherID='1';
	 $sql2="SELECT Fname,Lname,AVG(Rating) From Rating INNER JOIN Teacher ON Rating.TeacherID=Teacher.TeacherID Where Teacher.TeacherID='1'";
	$sql3="Select DISTINCT Comment, Rating FROM Rating WHERE TeacherID='1' AND Comment<>''";
	//sql queries for Web programming class
	echo "</div>";
	 }
	 if($CourseID=='2'){
	 echo "<div class='container'>";
	echo "<div class='child'>";
	echo "<div>";
	 include 'Course2menu.php';
	  echo "</div>";
	 echo"</div>";
	 echo "<div class='child'>";//open child
	 echo "<div>";//in child
	 echo "<div class='card'>";
  echo "<img src='prof_2.jpeg' alt='Avatar' style='width:100%'>";
  
    echo "<h4 class='prof'><b>Mark Roberts</b></h4>";
    echo"<p class='proflabel'>Neuroscientist</p>";
  echo"</div>";
echo "</div>";
	 $TeacherID='2';
	 $sql2="SELECT Fname,Lname,AVG(Rating) From Rating INNER JOIN Teacher ON Rating.TeacherID=Teacher.TeacherID Where Teacher.TeacherID='2'";
	$sql3="Select Comment, Rating FROM Rating WHERE TeacherID='2' AND Comment<>''";
	//sql queries for Neuroscience class
	echo "</div>";
	 }
	 
	  ?>
	<h3> Would you like to rate your professor? </h3>
	
	<button onclick="displayForm()">Rate Professor</button>
	
	<form id="form" class="form" style="display: none;" method="POST">
</p>
		<label for="rating"> Please enter your rating (0-5): </label>
		<input class="rate" name="rating" type="text" id="rating" >
		
		<br>
		
		<br>
		
		<input type="checkbox" name="checkbox" value="checkbox" id="Mycheckbox" onclick="showCompleteForm()">Click here to add a comment<br>
		<p id="completeForm" style="display:none">
		
<textarea name="comment" cols="50" rows="10" value=""></textarea><br/>
  
  
	
  <br>
  </p>
		<input type="submit" value="Submit" class="button" id="submitbutton">
</form>

	</div>
	 </div>
	 </div>
	 
	
	<script>
    function displayForm() {
        document.getElementById('form').style.display = 'block';
        //function to display professor rating form
    }
    </script>
	
	
	<script>
function showCompleteForm() {
//function to display optional comment
  var checkBox = document.getElementById("Mycheckbox");
  var fullText = document.getElementById("completeForm");
  if (checkBox.checked == true){
    fullText.style.display = "block";
  } else {
     fullText.style.display = "none";
     //hide/show comment text box
  }
}
</script>
	
	<?php 
		session_start();
		
		$host="localhost";
		$user="get26";
		$password="Student_4191025";
		$dbname="get26";
		$connect=mysqli_connect($host,$user,$password,$dbname);
		
		
		if($_POST){
		if(($_POST['rating'])<6 && ($_POST['rating'])>0){
		$rating=$_POST['rating'];
		}else{
		echo "<h4> Error: Please enter a rating. Only numbers 0-5 allowed <br></h4>";
		}
		$comment=$_POST['comment'];
		
		if(empty($_POST['rating']) && !preg_match('/^[0-5]*$/', $rating)){
		echo "<h4> Error: Please enter a rating.</br></h4>";
		}
		if(!preg_match('/^[0-5]*$/', $rating)) {
 		 echo "<h4> Error: Please enter a rating. Only numbers 0-5 allowed <br></h4>";
 		 }
 		  
 		
		
		$sql= "INSERT INTO Rating (Rating,Comment,TeacherID) values ('{$rating}','{$comment}','{$TeacherID}')";
		//query to insert rating, comment is optional
 		$result= mysqli_query($connect, $sql);
 		
 		if(!$result){

	die("Database query failed.");
	}
	if($result = mysqli_query($connect,$sql)){
	
	echo "<br> <h4> Thank you for submitting a rating!</h4>";
	
	}
	
	
	
 
		
}
$number;
$row;
	$average1=mysqli_query($connect,$sql2);
	if ($average1->num_rows > 0) {
    echo "<table><tr><th>Teacher</th><th>Average Rating</th></tr>";
    // output data of each row
    while($row = $average1->fetch_assoc()) {
       
        echo "<tr><td>" . $row["Fname"]. " " . $row["Lname"] . "</td><td>". $row["AVG(Rating)"] . "</td></tr>" ;
$number = $row["AVG(Rating)"];
//displays average rating for each teacher
    }
    echo "</table>";
    echo"</div>";
 		echo"</div>";
}

if($number <=5 && $number>=4.75){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
}

if($number <4.75 && $number>=4.25){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star-half-o' style='color:yellow'></span>";
}

if($number <4.25 && $number>=4){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
}
if($number <4 && $number>=3.25){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star-half-o' style='color:yellow'></span>";
}

if($number <3.25 && $number>=3){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
}

if($number <3 && $number>=2.25){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star-half-o' style='color:yellow'></span>";
}
if($number <2.25 && $number>=2){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star checked'></span>";
}
if($number <2 && $number>=1.25){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
echo "<span class='fa fa-star-half-o' style='color:yellow'></span>";
}
if($number <1.25 && $number>=1){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star checked'></span>";
}
if($number <1 && $number>=0.25){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: <p>";
echo "<span class='fa fa-star-half-o' style='color:yellow'></span>";
}
if($number <0.25 && $number>=0){
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
echo "<p class=starrating >Star Rating: Zero Stars<p>";

}
//Displays corresponding star rating
?>


<?php
echo "<br>";
$comments=mysqli_query($connect,$sql3);
	if ($comments->num_rows > 0) {
    echo "<table><tr><th>Comment</th><th>Rating</th></tr>";
    // output data of each row
    while($row2 = $comments->fetch_assoc()) {
        echo "<tr><td>" . $row2["Comment"]. "</td><td>". $row2["Rating"] . "</td></tr>" ;
        //displays all of the unique comments and the corresponding rating for each teacher
    }
    echo "</table>";
    echo"</div>";
 		echo"</div>";	
}
$connect->close();
 		
 		 ?>
		
		</div>
		</div>
	  
	  </body>
</html>