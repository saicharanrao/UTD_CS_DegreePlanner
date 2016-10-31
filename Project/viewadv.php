
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 


?>
<h3>Here are your RESERVATIONS:</h3>
<p><hr><h4><strong><?php echo 'Event Name'.'&nbsp&nbsp&nbsp&nbsp&nbsp'.'Net ID'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Event Date'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'TimeSlot' ?></strong></h4></p>
<?php
$AdvName1=$result3['Username'];
$query8 = "SELECT * FROM  RESERVATIONS WHERE AdvisorName='$AdvName1'";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
				   
                echo $row['EVENTNAME'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				 echo $row['Netid'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
			
				echo $row['EventDate'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
				echo $row['TimeSlot'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
	
               echo "<br>";
				echo "<br>";
               
        }
		?>

<?php 
	
	include 'templates/footer.php'; 
	?>