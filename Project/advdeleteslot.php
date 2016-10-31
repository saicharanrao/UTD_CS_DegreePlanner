<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 
 
 if (isset($_POST['submit1']))
{
	
		$eid1 = $_POST['studnetid'];
		$_SESSION["eid1"] = $eid1;
	
$AdvName1=$_SESSION["eid1"];
$query8 = "SELECT EVENTNAME,ADVISORNAME FROM  RESERVATIONS  WHERE NETID='$AdvName1'";
		$result8 = ($con->query($query8));
		
		echo '<strong>Choose the slot to be deleted</strong>';
		echo '<form method="POST" >';
		echo "<option size =30 ></option>";
		echo "<select name='event'>";
		echo "<option value=''>Please choose your option</option>";
		while ($row = $result8->fetch_row()) 
		{
		echo '<option value="'.$row[0].'">'.$row[0].'</option>';
		}
		echo '<input type="submit" name="submit" value="submit"/>';
}

?>
<?php
if (isset($_POST['submit']))
{	
	 $eid = $_POST['event'];
	 $AdvName11=$_SESSION["eid1"];
	 $query = "DELETE FROM  RESERVATIONS WHERE EVENTNAME = '$eid' AND Netid = '$AdvName11'";
		$result = $con->query($query);
		if($result)
		{
			echo '<br/></br>Your Reservation is DELETED in the system.Thank you.';
			echo '<html><body><li>
				<a href="deletestudadv.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		
		}
		else
		{
			$errors[]='Error in Reservation.';	
			print_r($errors);
						}
	
	
}
	
?>