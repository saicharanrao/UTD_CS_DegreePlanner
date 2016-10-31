<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php';
 
 echo '<strong>Please Enter the NetId of the Student:</strong>';
 ?>
 <form method="POST" action="advdeleteslot.php">
 <ul>
 <li><br>
<input type="text" name="studnetid" required/>
</li>
 </ul>

<input type="submit" name="submit1" value="submit1"/>
 
 
 
 <?php 
	
	include 'templates/footer.php'; 
	?>