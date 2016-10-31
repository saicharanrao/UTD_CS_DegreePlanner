<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 
?>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="CSS/jquery.datetimepicker.css"/>
<link rel="stylesheet" type="text/css" href="CSS/jquery.timepicker.css"/>
<script src="jQuery1/jquery.js"></script>
<script src="jQuery1/jquery.datetimepicker.full.js"></script>
<script src="jQuery1/jquery.timepicker.js"></script>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}

</style>
</head>

<body>

<p><h1><strong><font color="green"><?php echo $result3['Username'] ?></font></strong>,Create Advising Session:</h1></p>
		

<form method="post" action="">
<label><strong>Advising Event Name :</strong></label>
<input type="text" id="name" name="eventname" placeholder=" " required><br/>

<p><h2><font>Choose your Preferred date and Timings:</font></h2></p> 
</br>
	<h3>Choose your Date</h3>
	<input type="text" id="datetimepicker2" name="choosedate"/><br><br>	
	
	<h3>Start Time</h3>     
	<p><input id="intime" type="text" class="time" name="chooseOption1"/></p>
	
	<h3>End Time</h3>    
	<p><input id="intimee" type="text" class="time" name="chooseOption2" /></p>
	</br>
<input type="submit" value="Submit the option"/>
</form>
</body>
<script>

$tr='9:00';
$('#datetimepicker2').datetimepicker({
	lang:'ch',
	timepicker:false,
	
	minDate:0, 
	
});

$('#intime').timepicker({
'timeFormat' : 'H:i',
'minTime': $tr,
'maxTime': '18:00' 
});
$('#intimee').timepicker({
'timeFormat' : 'H:i',
'minTime': '9:30',
'maxTime': '18:00' 
});

</script>
</html>
<?php
	
	if((isset($_POST)===true)&&(empty($_POST)===false)){
		
		
		$option = isset($_POST['chooseOption1']) ? $_POST['chooseOption1'] : false;
		$option2 = isset($_POST['chooseOption2']) ? $_POST['chooseOption2'] : false;
		$option3 = isset($_POST['choosedate']) ? $_POST['choosedate'] : false;
		$eventname = isset($_POST['eventname']) ? $_POST['eventname'] : false;
		$AdvName=$result3['Username'];
		
		//echo $option3;
		if(($option)>=($option2)){
		$errors[]='Please choose correct Endtime';
	}
	
   if (($option)&&($option2)&&($option3)&&(empty($errors) ===true)) {
	   
     $query = "INSERT INTO ADVISING (ADVISORNAME,EVENTNAME,EVENTDATE,STARTTIME,ENDTIME) 
		VALUES ('$AdvName','$eventname', '$option3','$option','$option2')";
		$result = $con->query($query);
		echo 'Thank you for creating the event.';
		echo '<html><body><li>
				<a href="createadv.php" target="_top" class="btn btn-default" role="button">Back</a></li>
			</body></html>';
		
		exit();
	
	
	
	 

   } 
   else {
	   print_r($errors);
     echo "Please Choose all the Options(Date,Time) Properly";
     exit; 
   }
		
		
	}	
		
	
?>
<?php 
	
	include 'templates/footer.php'; 
	?>