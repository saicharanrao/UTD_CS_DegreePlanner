
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 


?>
<?php
	
	if((isset($_POST['chooseOption1'])===true)&&(empty($_POST['chooseOption1'])===false)){
		
		
		$option = isset($_POST['chooseOption1']) ? $_POST['chooseOption1'] : false;
   if ($option) {
     if($_POST['chooseOption1']=='Data Sciences'){
		 header('Location:datasciences.php');
	 }
	else if($_POST['chooseOption1']=='Information Assurance'){
		 header('Location:InfAssur.php');
	 }
	
	 else if($_POST['chooseOption1']=='Intelligent Systems'){
		 header('Location:IntSys.php');
	 }
	
	 else if($_POST['chooseOption1']=='Interactive Computing'){
		 header('Location:IntComp.php');
	 }
	
	 else if($_POST['chooseOption1']=='Networks and Telecommunications'){
		 header('Location:NetTele.php');
	 }
	else if($_POST['chooseOption1']=='Systems Track'){
		 header('Location:Syst.php');
	 }
	 else if($_POST['chooseOption1']=='Traditional Computer Science'){
		 header('Location:Traditional.php');
	 }
	
	
	
	 

   } 
   else {
     echo "task option is required";
     exit; 
   }
		
		
	}
if((isset($_POST['continue'])===true)&&(empty($_POST['continue'])===false)){
		
		$AdvName11=$result3['NETID'];
$query = "SELECT * FROM  STUDENTPROFILE WHERE NETID = '$AdvName11'";
$result = $con->query($query);
while ($row = mysqli_fetch_assoc($result)) {
                $option1 = $row['Track'];
				
               
        }

		
		
   if ($option1) {
     if($option1=='Data Sciences'){
		 header('Location:datasciences.php');
	 }
	else if($option1=='Information Assurance'){
		 header('Location:InfAssur.php');
	 }
	
	 else if($option1=='Intelligent Systems'){
		 header('Location:IntSys.php');
	 }
	
	 else if($option1=='Interactive Computing'){
		 header('Location:IntComp.php');
	 }
	
	 else if($option1=='Networks and Telecommunications'){
		 header('Location:NetTele.php');
	 }
	else if($option1=='Systems Track'){
		 header('Location:Syst.php');
	 }
	 else if($option1=='Traditional Computer Science'){
		 header('Location:Traditional.php');
	 }
	
	
	
	 

   } 
   else {
     echo "task option is required";
     exit; 
   }
		
		
	}		
	
		/*header('Location:register.php?Logged');
		exit();
	}
	else{
		echo 'Problem with Track selection';
	}*/
	
?>
<?php
$AdvName11=$result3['NETID'];
$query = "SELECT * FROM  STUDENTPROFILE WHERE NETID = '$AdvName11'";
$result = $con->query($query);
while ($row = mysqli_fetch_assoc($result)) {
                echo '<h1>Your current Track is:<strong>'.$row['Track'].'</strong></h1>';
				
               
        }
		

?>
<form method="post" action="">

<input type="submit" name="continue" value="Continue"/>
</form>
<form method="post" action="changetrack.php">
<br/><br/><br/><input type="submit" value="Change Your Track"/>
</form><br/><br/><br/>
	<h2>Check the Courses For each Track</h2>

<form method="post" action="">
  <select name="chooseOption1">
    <option selected disabled>Choose here</option>
				<option value="Data Sciences">Data Sciences</option>
				<option value="Information Assurance">Information Assurance</option>
				<option value="Intelligent Systems">Intelligent Systems</option>
				<option value="Interactive Computing">Interactive Computing</option>
				<option value="Networks and Telecommunications">Networks and Telecommunications</option>
				<option value="Systems Track">Systems Track</option>
				<option value="Traditional Computer Science">Traditional Computer Science</option>
  </select>
  <input type="submit" value="Submit the option"/>
</form>


<?php echo '<html>
<body>
<ul><br/><br/><br/>
<li><a href="https://catalog.utdallas.edu/2015/graduate/programs/ecs/computer-science" target="_blank" >Graduate Catalog</a> </li>

<li><a href="https://catalog.utdallas.edu/2015/graduate/courses/cs" target="_blank" >Graduate Courses</a> </li>
</ul>
</body>
</html>';
?>
<?php 
	
	include 'templates/footer.php'; 
	?>