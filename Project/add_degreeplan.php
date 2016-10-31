
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$degname = (isset($_POST['degname']) ? $_POST['degname'] : '');
	$sql5="SELECT * FROM DEGREEPLAN WHERE DEGREENAME='$degname'";
	$result9=$con->query($sql5);
		if(empty($errors)=== true){
		
			if ($result9->num_rows > 0)
	{
		while($row = $result9->fetch_assoc()) 
		{
  
		$errors[]= 'Degname already registered in the system';
		
					
		session_unset();
		break;
		}

		}
	
	
	
	
	

	
	
	}
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Your Degree Plan is successfully added';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$deptid=mysqli_real_escape_string($con,(isset($_POST['deptid']) ? $_POST['deptid'] : ''));
		$degname2=mysqli_real_escape_string($con,(isset($_POST['degname']) ? $_POST['degname'] : ''));
		
		
		$query = "INSERT INTO DEGREEPLAN (DEPTID,DEGREENAME) 
		VALUES ('$deptid', '$degname')";
		$result = $con->query($query);
		echo 'DegreePlan Added Successfully!!';
		echo '<html><body><li>
				<a href="add_degreeplan.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Add Degree Plan</h1>

<form action ="" method="post">
<ul>
<li>
Dept Id:<br>
<input type="number" name="deptid" required/>
</li>
<li><br>
Degree Name:<br>
<input type="text" name="degname" required/>
</li>


<li>
<br>
<input type="submit" name="adddplan"  value="Add Degree Plan"required/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>