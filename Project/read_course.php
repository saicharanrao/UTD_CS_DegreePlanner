
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$classid = (isset($_POST['classid']) ? $_POST['classid'] : '');
	$sql5="SELECT * FROM ALLCOURSES WHERE courseid='$classid'";
	$result9=$con->query($sql5);
	if(mysqli_num_rows($result9)>0){
		
	}
	else{
		while(true){
		$errors[]= 'Courseid not registered in the system';
		
					
		session_unset();
		break;
		}
	}
	
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo ' ';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$classid2=mysqli_real_escape_string($con,(isset($_POST['classid']) ? $_POST['classid'] : ''));
		
		
		
		$query = "SELECT * FROM ALLCOURSES WHERE COURSEID='$classid2'";
		$result = mysqli_fetch_assoc($con->query($query));
		
		echo 'Classid: '.$result['courseid'].'<br/>'.'<br/>';
		echo 'Class name: '.$result['coursename'].'<br/>'.'<br/>';
		echo 'Class Prefix: '.$result['classprfx'].'<br/>'.'<br/>';
		echo 'Class Hours: '.$result['classhrs'].'<br/>'.'<br/>';
		echo 'DegId: '.$result['degid'].'<br/>'.'<br/>';
	
	
		echo '<html><body><li>
				<a href="read_course.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Read Course</h1>

<form action ="" method="post">
<ul>
<li>
Classid:<br>
<input type="number" name="classid" required/>
</li>
<li>
<br>
<input type="submit" name="deletecourse"  value="Retrieve Course"/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>