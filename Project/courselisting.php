
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 
?>
<html>
<body>
<p><h1><strong><?php echo 'Admin' ?></strong>,Here is your Course Listing!!</h1></p>
<p><h1><hr><font color="green">Track:Data Sciences</font></h1></p>
<p><h2><hr><font color="red">Core Courses:</font></h2></p>
<p><h3><strong>
<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHOURS,CORE FROM CORECOURSES WHERE CORE=1 AND TRACK LIKE '%D%'";
		$result8 = ($con->query($query8));
		
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHOURS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>
</strong></h3></p>
<p><h2><font color="red">Choose one among the following:</font></h2></p>
<p><h3><strong>
<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHOURS,CORE FROM CORECOURSES WHERE CORE=0";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHOURS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>
		<p><h2><font color="red">Here are the electives:</font></h2></p>
	<p><h2><font color="red">(6000 Level:)</font></h2></p>

<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHOURS FROM ELECTIVES WHERE COURSEID >5999";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHOURS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>
<p><h2><font color="red">(5000 Level:)</font></h2></p>

<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHOURS FROM ELECTIVES WHERE COURSEID <6000";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHOURS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>
</body>
</html>
<?php



?>

<?php 
	
	include 'templates/footer.php'; 
	?>