
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$dgplan = (isset($_POST['dgplan']) ? $_POST['dgplan'] : '');
	$sql5="SELECT * FROM DEGREEPLAN WHERE DEGREENAME='$dgplan'";
	$result9=$con->query($sql5);
	if(mysqli_num_rows($result9)>0){
		
	}
	else{
		while(true){
		$errors[]= 'dgplan not registered in the system';
		
					
		session_unset();
		break;
		}
	}
		
	
	
	

	
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'The User is deleted Successfully.';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$dgplan2=mysqli_real_escape_string($con,(isset($_POST['dgplan']) ? $_POST['dgplan'] : ''));
		
		
		$query = "DELETE FROM  DEGREEPLAN WHERE DEGREENAME='$dgplan'";
		$result = $con->query($query);
		echo 'Degree Plan has been deleted Successfully';
		echo '<html><body><li>
				<a href="delete_degreeplan.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Delete Degree Plan:</h1>

<form action ="" method="post">
<ul>
<li>
Degree Plan Name:<br>
<input type="text" name="dgplan" required/>
</li>

<li>
<br>
<input type="submit" name="Delete" value="Delete" />
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>