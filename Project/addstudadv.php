<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php';
 
 echo '<strong>Please Enter the NetId of the Student:</strong>';
 ?>
 <form method="POST" action="advchooseslot.php">
 <ul>
 <li><br>
<input type="text" name="studnetid" required/>
</li>
 </ul>

<input type="submit" name="submit" value="submit"/>
 
 
 
 <?php 
	
	include 'templates/footer.php'; 
	?>