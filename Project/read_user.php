
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$netidno = (isset($_POST['netid']) ? $_POST['netid'] : '');
	$sql5="SELECT * FROM USERS WHERE netid='$netidno'";
	$result9=$con->query($sql5);
	if(mysqli_num_rows($result9)>0){
		
	}
	else{
		while(true){
		$errors[]= 'Netid not registered in the system';
		
					
		session_unset();
		break;
		}
	}
		
	
	
	

	if(preg_match("/\\s/",(isset($_POST['netid']) ? $_POST['netid'] : ''))== true){
		$errors[]='No spaces in netid plz';
	}
	
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Admin,here are the details.';
		
		
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$netid2=mysqli_real_escape_string($con,(isset($_POST['netid']) ? $_POST['netid'] : ''));
		
		
		$query = "SELECT * FROM  USERS WHERE NETID='$netid2'";
		global $result;
		$result = mysqli_fetch_assoc($con->query($query));
		
		
		echo 'Netid: '.$result['netid'].'<br/>'.'<br/>';
		echo 'UTDid: '.$result['utdid'].'<br/>'.'<br/>';
		echo 'Username: '.$result['username'].'<br/>'.'<br/>';
		echo 'Firstname: '.$result['firstname'].'<br/>'.'<br/>';
		echo 'Lastname: '.$result['lastname'].'<br/>'.'<br/>';
		echo 'Email: '.$result['email'].'<br/>'.'<br/>';
		
		echo '<html><body><li>
				<a href="read_user.php" target="_top" class="btn btn-default" role="button">Back</a></li>
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
Netid:<br>
<input type="text" name="netid" required/>
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