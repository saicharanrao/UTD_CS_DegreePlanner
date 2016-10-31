
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 
$AdvName1=$result3['NETID'];
$query8 = "SELECT EVENTNAME,ADVISORNAME FROM  RESERVATIONS  WHERE NETID='$AdvName1'";
		$result8 = ($con->query($query8));
		
		echo '<strong>Please choose from the list of Events to Update them</strong>';
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

				
?>
<?php
 function generatearr($eid)
{
	$con=mysqli_connect('localhost','root','') or die(mysqli_error($errortext));
mysqli_select_db($con,'charan')or die(mysqli_error($errortext));
$sql1="SELECT TIMESLOT FROM RESERVATIONS WHERE EVENTNAME='$eid' ";
$c='';
$result = $con->query($sql1);	
	
	if ($result->num_rows > 0)
	{
	$a="[";
	while($row = $result->fetch_row())
	{
	$timeslot=$row[0];
	$time1 = strtotime($timeslot);
	$startTime = date("H:i:s", strtotime('+30 minutes', $time1));
	$a=$a."['".$timeslot."','".$startTime."'],";
	}
	$a=$a."]";
	$b=substr_replace($a,"]",-2);
	return $b;
	}
	else 
	{
	return "'".$c."'";
	}
}
 if (isset($_POST['submit']))
{
	echo '<center><strong> Choose your Slot !!</strong> ';
	
    $eid = $_POST['event'];	
	$_SESSION["eid"] = $eid;
	$days = 1;
	$startdate = $con->query("SELECT EventDate FROM ADVISING where EventName='$eid'")->fetch_object()->EventDate;
	$enddate = $con->query("SELECT EventDate FROM ADVISING where EventName='$eid'")->fetch_object()->EventDate;
	$stime = $con->query("SELECT Starttime FROM ADVISING where EventName='$eid'")->fetch_object()->Starttime; 
	$etime = $con->query("SELECT Endtime FROM ADVISING where EventName='$eid'")->fetch_object()->Endtime; 
	$startTime = strtotime($startdate); 
	$endTime = strtotime($enddate);
	$a=generatearr($eid);
	
	

 ?>
 <form  method='POST'><p>
	<div>
	<?php echo "<strong>Please choose slot between ". $stime . "  and  ". $etime."</strong>";?>
	<option size =30 ></option>
	<select name='dates'>
	<option value=''>Please select date from below list</option>"
<?php
	$i = 0;
	do {
	$newTime = strtotime('+'.$i++.' days',$startTime);
	echo '<option value="'.date('Y-m-d',$newTime).'">'.date('Y-m-d',$newTime).'</option>';	
	} while ($newTime < $endTime);
?>
</div>
<p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Time Slot: <input type="text" id="timeslot" name="timeslot" value="Select Time Slot"/></p>
</br><input type="submit" name="reserve" alt="reserve" value="reserve"/>
</form>
<?php

}

$AdvName11=$result3['NETID'];
if (isset($_POST['reserve']))
{

	
    $date1 = $_POST['dates'];
	$timeslot = $_POST['timeslot'];
	$eid = $_SESSION["eid"];
	$sql = "Select * from reservations where EVENTNAME = '$eid' and Netid='$AdvName11'";
	$result1 = $con->query($sql);
	 if ($result1->num_rows < 0)
	{
		while($row = $result1->fetch_assoc()) 
		{
		$errors[]= 'Advising not registered in the system';
		header('Location:error.php');
					
		session_unset();
		break;
		}
	}
	else
	{
	$starttime = $con->query("SELECT Starttime FROM ADVISING WHERE EventName = '$eid'")->fetch_object()->Starttime; 
	$endtime = $con->query("SELECT Endtime FROM ADVISING WHERE EventName = '$eid'")->fetch_object()->Endtime; 
	$adv1 = $con->query("SELECT AdvisorName FROM ADVISING where EventName='$eid'")->fetch_object()->AdvisorName;
	
	if(($timeslot >=$starttime)&&($timeslot<=$endtime))
	{	
		$query = "UPDATE RESERVATIONS SET AdvisorName = '$adv1',EVENTNAME = '$eid',Netid = '$AdvName11',EventDate = '$date1',TimeSlot = '$timeslot' WHERE EVENTNAME = '$eid' AND Netid = '$AdvName11'";
		$result = $con->query($query);
		if($result)
		{
			echo '<br/></br>Your Reservation is updated in the system.Thank you.';
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
	else {
			print_r($errors);
			
	}
	}
}
?>


<script>

$stime=<?php echo "'".$stime."'" ?>;
$etime=<?php echo "'".$etime."'" ?>;
$tr1=<?php echo $a ?>;

$('#timeslot').timepicker({
'timeFormat' :'H:i:s',
'minTime': $stime,
'maxTime': $etime,
'disableTimeRanges': $tr1


});
</script>

<?php 
	
	include 'templates/footer.php'; 
	?>