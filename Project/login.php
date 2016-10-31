<?php

include 'DBConnections/init.php';
userredirect();
include 'templates/all/overheader.php';


if(isset($_POST)===true){
	
		$netidno=(isset($_POST['netid']) ? $_POST['netid'] : '');
		$pass=(isset($_POST['password']) ? $_POST['password'] : '');
		
		$sql="SELECT * FROM USERS WHERE netid='$netidno' and password='$pass'";
		$result=$con->query($sql);
		if(!$row = $result->fetch_assoc()){
			$errors[]='Username and Password is incorrect';
		}
		else{
		     $_SESSION['user_id']=$row['userid'];
			 
			 
		
			$sql13="SELECT  LASTLOGIN  FROM users WHERE netid='$netidno'";
			$result113=$con->query($sql13);
			$sql12="UPDATE USERS SET LASTLOGIN=NOW() WHERE netid='$netidno'";
			$result112=$con->query($sql12);
			
			while ($row = mysqli_fetch_assoc($result113)) {
				$cookie_name = "user1";
				$cookie_value = $row['LASTLOGIN'];
				setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/");
               
        }
			
			
			 
				$cookie_name = "user";
				$cookie_value = $netidno;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 3), "/");			 
			 header('Location:Stud.php');
			 exit();
		}
		
		
	print_r($errors);
	

}
include 'templates/footer.php';
?>