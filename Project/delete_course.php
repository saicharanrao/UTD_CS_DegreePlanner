
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
	
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Your Course is successfully Deleted';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$classid2=mysqli_real_escape_string($con,(isset($_POST['classid']) ? $_POST['classid'] : ''));
		
		
		
		$query = "DELETE FROM COURSES WHERE CLASSID='$classid2'";
		$result = $con->query($query);
		echo 'Course Deleted!!';
		echo '<html><body><li>
				<a href="delete_course.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Delete Course</h1>

<form action ="" method="post">
<ul>
<li>
Classid:<br>
<input type="number" name="classid" required/>
</li>
<li>
<br>
<input type="submit" name="deletecourse"  value="Delete Course"/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>