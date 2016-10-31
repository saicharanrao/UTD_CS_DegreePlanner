
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$classid = (isset($_POST['classid']) ? $_POST['classid'] : '');
	$sql5="SELECT * FROM COURSES WHERE classid='$classid'";
	$result9=$con->query($sql5);
	if(mysqli_num_rows($result9)>0){
		
	}
	else{
		while(true){
		$errors[]= 'Classid not registered in the system';
		
					
		session_unset();
		break;
		}
	}
		
		
	
	
	
	

	if(preg_match("/\\s/",(isset($_POST['classprfx']) ? $_POST['classprfx'] : ''))== true){
		$errors[]='No spaces in class prefix plz';$boo=false;
	}
	
	
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Your Course is successfully updated';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$classid2=mysqli_real_escape_string($con,(isset($_POST['classid']) ? $_POST['classid'] : ''));
		$cname2=mysqli_real_escape_string($con,(isset($_POST['cname']) ? $_POST['cname'] : ''));
		$classprfx2=mysqli_real_escape_string($con,(isset($_POST['classprfx']) ? $_POST['classprfx'] : ''));
		$chr2=mysqli_real_escape_string($con,(isset($_POST['chr']) ? $_POST['chr'] : ''));
		$degid2=  mysqli_real_escape_string($con,(isset($_POST['degid']) ? $_POST['degid'] : ''));
		
		
		$query = "UPDATE COURSES SET CLASSID='$classid2',CLASSNAME='$cname2',CLASSPRFX='$classprfx2',CLASSHOURS='$chr2',DEGID='$degid2' 
		WHERE CLASSID='$classid2'";
		$result = $con->query($query);
		echo 'Course Updated!!';
		echo '<html><body><li>
				<a href="update_course.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Update Course</h1>

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
<input type="submit" name="addcourse"  value="Update Course"required/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>