
<?php 

include 'dbconnections/init.php'; 
userredirect2();
include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	

	$netidno = (isset($_POST['netid']) ? $_POST['netid'] : '');
	$sql5="SELECT * FROM USERS WHERE netid='$netidno'";
	$result9=$con->query($sql5);
		if(empty($errors)=== true){
		
			if ($result9->num_rows > 0)
	{
		while($row = $result9->fetch_assoc()) 
		{
  
		$errors[]= 'Netid already registered in the system';
		
					
		session_unset();
		break;
		}

		}
	
	
	
	
	

	if(preg_match("/\\s/",(isset($_POST['username']) ? $_POST['username'] : ''))== true){
		$errors[]='No spaces in username plz';$boo=false;
	}
	if(preg_match("/\\s/",(isset($_POST['netid']) ? $_POST['netid'] : ''))== true){
		$errors[]='No spaces in netid plz';$boo=false;
	}
	if(strlen((isset($_POST['password']) ? $_POST['password'] : ''))<6){
		$errors[]='Password must be atleast 6 chars';$boo=false;
	}
	if(trim((isset($_POST['password']) ? $_POST['password'] : ''))!==trim((isset($_POST['confirmpwd']) ? $_POST['confirmpwd'] : ''))){
		$errors[]='Please Match the passwords!!';$boo=false;
	}
	}
	
}

?>
<?php
	if(isset($_GET['Logged'])&&empty($_GET['Logged'])){
		echo 'Thank you for signing up';
	}
	else{
	
	if((isset($_POST)===true)&&(empty($errors) ===true)&&(empty($_POST)===false)){
		
		
		
		$netid2=mysqli_real_escape_string($con,(isset($_POST['netid']) ? $_POST['netid'] : ''));
		$fname2=mysqli_real_escape_string($con,(isset($_POST['firstname']) ? $_POST['firstname'] : ''));
		$lname2=mysqli_real_escape_string($con,(isset($_POST['lastname']) ? $_POST['lastname'] : ''));
		$uname2=mysqli_real_escape_string($con,(isset($_POST['username']) ? $_POST['username'] : ''));
		$pwd2=  mysqli_real_escape_string($con,(isset($_POST['password']) ? $_POST['password'] : ''));
		$email2=mysqli_real_escape_string($con,(isset($_POST['email']) ? $_POST['email'] : ''));
		$utdid2=mysqli_real_escape_string($con,(isset($_POST['utdid']) ? $_POST['utdid'] : ''));
		
		
		$query = "INSERT INTO USERS (USERID,Username,Password,FIRSTNAME,LASTNAME,NETID,EMAIL,UTDID) 
		VALUES (NULL,'$uname2', '$pwd2','$fname2','$lname2','$netid2','$email2','$utdid2')";
		$result = $con->query($query);
		echo 'Thank you for signing up';
		echo '<html><body><li>
				<a href="adduser.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		
		exit();
	}
	else{
		print_r($errors);
	}
	}
?>
	<h1>Add User</h1>

<form action ="" method="post">
<ul>
<li>
Netid:<br>
<input type="text" name="netid" required/>
</li>
<li><br>
UTDid:<br>
<input type="text" name="utdid" required/>
</li>

<li><br>
Firstname:<br>
<input type="text" name="firstname" required/>
</li>
<li><br>
Lastname:<br>
<input type="text" name="lastname" required/>
</li>
<li>
<li><br>
Username:<br>
<input type="text" name="username" required/>
</li>
<li><br>
Password:<br>
<input type="password" name="password" required/>
</li>
<li><br>
Confirmpassword:<br>
<input type="text" name="confirmpwd" required/>
</li>
<li><br>
Email:<br>
<input type="email" name="email" required/>
</li>
<li>
<br>
<input type="submit" name="Sign Up" required/>
</li>

</ul>
</form>
	

<?php 
	
	include 'templates/footer.php'; 
	?>