
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 


?>
<h3>Here are your Advising Sessions:</h3>
<p><hr><h4><strong><?php echo 'Adv Name'.'&nbsp&nbsp&nbsp&nbsp&nbsp'.'Name'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Date'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Start'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'End' ?></strong></h4></p>
<?php
$AdvName1=$result3['Username'];
$query8 = "SELECT * FROM  ADVISING";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
				    echo $row['AdvisorName'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
			
                echo $row['EventName'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				echo $row['EventDate'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				echo $row['Starttime'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	
               
				echo $row['Endtime']."&nbsp&nbsp&nbsp&nbsp";
				echo "<br>";
				echo "<br>";
               
        }
		?>
		<form role="form" method="get" action="Chooseslot.php">
					<div class="form-group">
						




						<button type="submit" class="btn btn-default">Continue to book</button></div>

																</form>
																<br/><br/><br/><br/>
		<h3>Here are your RESERVATIONS:</h3>
<p><hr><h4><strong><?php echo 'Event Name'.'&nbsp&nbsp&nbsp&nbsp&nbsp'.'Advisor Name'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Event Date'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'TimeSlot' ?></strong></h4></p>
<?php
$AdvName1=$result3['NETID'];
$query8 = "SELECT * FROM  RESERVATIONS WHERE NETID='$AdvName1'";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
				   
                echo $row['EVENTNAME'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				 echo $row['AdvisorName'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
			
				echo $row['EventDate'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				echo $row['TimeSlot'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	
               echo "<br>";
				echo "<br>";
               
        }
		?>

<?php 
	
	include 'templates/footer.php'; 
	?>