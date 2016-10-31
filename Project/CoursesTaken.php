<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php';
 ?>
 <?php 
 
 echo '<strong>CourseId'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName'.'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'GPA</strong><br/><br/><br/>';
 $query55 = "select b.CourseId as cid ,b.gpa as sgpa,a.coursename as cname from  coursestaken b,allcourses a where b.netid= '$var12' and b.CourseId = a.courseid";
		$result55 = ($con->query($query55));
		while ($row = mysqli_fetch_assoc($result55)) {
                echo '<strong>'.$row['cid'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$row['cname'].'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.':</strong>';
				echo '<strong>'.$row['sgpa'].'</strong>';
	
               
				echo "<br>";
				echo "<br>";
               
        }
		?>
 
 
 
 
 <?php 
	
	include 'templates/footer.php'; 
	?>