<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php';
 ?>
 <?php
if (isset($_POST['submit']))
{
		$eid1 = $_POST['studnetid'];
		$_SESSION["eid1"] = $eid1;
	
		$query8 = "SELECT EVENTNAME,ADVISORNAME FROM  ADVISING WHERE EVENTNAME NOT IN (SELECT EVENTNAME FROM RESERVATIONS WHERE NETID='$eid1')";
		$result8 = ($con->query($query8));
		
		echo '<strong>Please choose from the list of Events</strong>';
		echo '<form method="POST" action="advstudslot.php">';
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
	
	include 'templates/footer.php'; 
	?>