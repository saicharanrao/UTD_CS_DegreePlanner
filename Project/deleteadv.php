
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 

if((isset($_POST)===true)&&(empty($_POST)===false)){
	
	$AdvName1=$result3['Username'];
	$dgplan = isset($_POST['eventname']) ? $_POST['eventname'] : false;
	$sql5="SELECT * FROM ADVISING WHERE EventName='$dgplan' and AdvisorName='$AdvName1'";
	$result9=$con->query($sql5);
	if(mysqli_num_rows($result9)>0){
		
	}
	else{
		while(true){
		$errors[]= 'Advising event not registered in the system';
		
					
		session_unset();
		break;
		}
	}
		
		
	
	
	
	

	
	
	
}
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

<p><h1><strong><font color="green"><?php echo $result3['Username'] ?></font></strong>,Delete Advising Session:</h1></p>
<h3>Here are your Advising Sessions:</h3>
<p><hr><h4><strong><?php echo 'Name'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Date'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'Start'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'End' ?></strong></h4></p>
<?php
$AdvName1=$result3['Username'];
$query8 = "SELECT * FROM  ADVISING WHERE ADVISORNAME='$AdvName1'";
		$result8 = ($con->query($query8));
		if(mysqli_num_rows($result8)>0){
		
	
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['EventName'].'&nbsp&nbsp&nbsp&nbsp';
				echo $row['EventDate'].'&nbsp&nbsp&nbsp&nbsp';
				echo $row['Starttime'].'&nbsp&nbsp&nbsp&nbsp';
	
               
				echo $row['Endtime']."&nbsp&nbsp&nbsp&nbsp";
				echo "<br>";
				echo "<br>";
               
        }
		}
		else
			echo 'No Advising events found';
		?>
		<?php
		
		?>

<form method="post" action="">
<label><hr><strong>Advising Event Name :</strong></label>
<input type="text" id="name" name="eventname" placeholder=" " required><br/>


<input type="submit" value="Submit the option"/>
</form>
</body>

</html>


<?php
	
	if((isset($_POST)===true)&&(empty($_POST)===false)){
		
		
		$eventname = isset($_POST['eventname']) ? $_POST['eventname'] : false;
		$AdvName=$result3['Username'];
		
		
	
   if (($eventname)&&(empty($errors) ===true)) {
	   
     $query = "DELETE FROM  ADVISING WHERE ADVISORNAME='$AdvName' AND EVENTNAME='$eventname'";
		$result = $con->query($query);
		 $query12 = "DELETE FROM  RESERVATIONS WHERE  EVENTNAME='$eventname'";
		$result12 = $con->query($query12);
		echo 'Your event has been deleted.';
		echo '<html><body><li>
				<a href="deleteadv.php" target="_top" class="btn btn-default" role="button">Back</a></li>
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