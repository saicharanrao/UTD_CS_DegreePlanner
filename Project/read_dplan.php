
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$netidno = (isset($_POST['did']) ? $_POST['did'] : '');
	$sql5="SELECT * FROM DEGREEPLAN WHERE DEGREENAME='$netidno'";
	$result9=$con->query($sql5);
	if(mysqli_num_rows($result9)>0){
		
	}
	else{
		while(true){
		$errors[]= 'Degree Plan Name not registered in the system';
		
					
		session_unset();
		break;
		}
	}
		
	
	
	

	
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Admin,here are the details.';
		
		
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$netid2=mysqli_real_escape_string($con,(isset($_POST['did']) ? $_POST['did'] : ''));
		
		
		$query = "SELECT * FROM  DEGREEPLAN WHERE DEGREENAME='$netid2'";
		global $result;
		$result = mysqli_fetch_assoc($con->query($query));
		
		
		echo 'DEGREE id: '.$result['DeptId'].'<br/>'.'<br/>';
		
		echo 'Degreename: '.$result['DegreeName'].'<br/>'.'<br/>';
		
		
		echo '<html><body><li>
				<a href="read_dplan.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>User Details:</h1>

<form action ="" method="post">
<ul>
<li>
Degree Plan Name:<br>
<input type="text" name="did" required/>
</li>

<li>
<br>
<input type="submit" name="showdetails" value="Retrieve Info" />
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>