
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$classid = (isset($_POST['classid']) ? $_POST['classid'] : '');
	$sql5="SELECT * FROM COURSES WHERE classid='$classid'";
	$result9=$con->query($sql5);
		if(empty($errors)=== true){
		
			if ($result9->num_rows > 0)
	{
		while($row = $result9->fetch_assoc()) 
		{
  
		$errors[]= 'Classid already registered in the system';
		
					
		session_unset();
		break;
		}

		}
	
	
	
	
	

	if(preg_match("/\\s/",(isset($_POST['classprfx']) ? $_POST['classprfx'] : ''))== true){
		$errors[]='No spaces in class prefix plz';$boo=false;
	}
	
	}
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Your Course is successfully added';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$classid2=mysqli_real_escape_string($con,(isset($_POST['classid']) ? $_POST['classid'] : ''));
		$cname2=mysqli_real_escape_string($con,(isset($_POST['cname']) ? $_POST['cname'] : ''));
		$classprfx2=mysqli_real_escape_string($con,(isset($_POST['classprfx']) ? $_POST['classprfx'] : ''));
		$chr2=mysqli_real_escape_string($con,(isset($_POST['chr']) ? $_POST['chr'] : ''));
		$degid2=  mysqli_real_escape_string($con,(isset($_POST['degid']) ? $_POST['degid'] : ''));
		
		
		$query = "INSERT INTO COURSES (CLASSID,CLASSNAME,CLASSPRFX,CLASSHOURS,DEGID) 
		VALUES ('$classid2', '$cname2','$classprfx2','$chr2','$degid2')";
		$result = $con->query($query);
		echo 'Course Added Successfully!!';
		echo '<html><body><li>
				<a href="add_course.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Add Course</h1>

<form action ="" method="post">
<ul>
<li>
Classid:<br>
<input type="number" name="classid" required/>
</li>
<li><br>
Class Name:<br>
<input type="text" name="cname" required/>
</li>

<li><br>
Class Prefix:<br>
<input type="text" name="classprfx" required/>
</li>
<li><br>
Course Hours:<br>
<input type="number" name="chr" required/>
</li>
<li>
<li><br>
DEGID:<br>
<input type="number" name="degid" required/>
</li>
<li>
<br>
<input type="submit" name="addcourse"  value="Add Course"required/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>