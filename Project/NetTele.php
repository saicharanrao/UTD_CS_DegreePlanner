
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 
?>
<html>
<body>
<p><h1><strong><?php echo $result3['Username'] ?></strong>,Here is your Course Listing!!</h1></p>
<p><h1><hr><font color="green">Track:Network and Telecommunications</font></h1></p>
<p><u><h3>CORE COURSES (15 CREDIT HOURS)   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3></u></p><p><h5> (3.19 Grade Point AVG Required)</h5></p>
<p><h3><strong>
<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHRS  FROM ALLCOURSES WHERE COURSEID IN (SELECT COURSEID FROM COURSETRACK WHERE TRACKID=5 AND TYPE='c')";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHRS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>
</strong></h3></p>

<p><h3><strong>
<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHRS  FROM ALLCOURSES WHERE COURSEID IN (SELECT COURSEID FROM COURSETRACK WHERE TRACKID=5 AND TYPE='n')";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHRS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>
<p><hr><u><h3>**FIVE APPROVED 6000 ELECTIVES (15 CREDIT HOURS)   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3></u></p><p><h5> (3.0 Grade Point AVG Required)</h5></p>
<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHRS FROM ALLCOURSES WHERE COURSEID >5999 AND COURSEID NOT IN (SELECT COURSEID FROM COURSETRACK WHERE TRACKID=5)";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHRS'].")";
				echo "<br>";
				echo "<br>";
               
        }
		?>

<p><hr><u><h3>Additional ELECTIVES (3 credit hours minimum)</h3></u></p>
<?php $query8 = "SELECT COURSEID,COURSENAME,CLASSPRFX,CLASSHRS FROM ALLCOURSES WHERE COURSEID <6000 AND COURSEID NOT IN (SELECT COURSEID FROM COURSETRACK WHERE TRACKID=5)";
		$result8 = ($con->query($query8));
		while ($row = mysqli_fetch_assoc($result8)) {
                echo $row['CLASSPRFX'].$row['COURSEID'].':';
				echo $row['COURSENAME'];
	
               
				echo "(Credit Hours:".$row['CLASSHRS'].")";
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