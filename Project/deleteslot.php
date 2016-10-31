<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 
 
 
$AdvName1=$result3['NETID'];
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


?>
<?php
if (isset($_POST['submit']))
{	$AdvName11=$result3['NETID'];
	 $eid = $_POST['event'];
	 $query = "DELETE FROM  RESERVATIONS WHERE EVENTNAME = '$eid' AND Netid = '$AdvName11'";
		$result = $con->query($query);
		if($result)
		{
			echo '<br/></br>Your Reservation is DELETED in the system.Thank you.';
			echo '<html><body><li>
				<a href="bookslot.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		
		}
		else
		{
			$errors[]='Error in Reservation.';	
			print_r($errors);
						}
	
	
}
	
?>