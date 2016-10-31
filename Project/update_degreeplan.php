
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
		echo 'Your Course is successfully updated';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$dgplan2=mysqli_real_escape_string($con,(isset($_POST['dgplan']) ? $_POST['dgplan'] : ''));
		$ndgplan=mysqli_real_escape_string($con,(isset($_POST['ndgplan']) ? $_POST['ndgplan'] : ''));
		
		
		$query = "UPDATE DEGREEPLAN SET DEGREENAME='$ndgplan' 
		WHERE DEGREENAME='$dgplan2'";
		$result = $con->query($query);
		echo 'Degree Plan Updated!!';
		echo '<html><body><li>
				<a href="update_degreeplan.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Update Degree Plan</h1>

<script> 
  $( document ).ready(function() {
    console.log("The DOM is now loaded and can be manipulated." );
  });
 
</script>	
<form action ="" method="post">
<ul>

<li><br>
Degree Plan Name(Existing):<br>
<input type="text" name="dgplan" required/>
</li>

<li><br>
New Degree Plan Name:<br>
<input type="text" name="ndgplan" required/>
</li>

<li>
<br>
<input type="submit" name="updatedg"  value="Update Degree Plan"required/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>