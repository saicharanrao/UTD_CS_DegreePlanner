
<?php include 'dbconnections/init.php'; 
 include 'templates/all/overheader.php'; 


?>
<?php
	
	$change= '';
	if((isset($_POST)===true)&&(empty($_POST)===false)){
		$nett = $_POST['netid1'];
		$query12 = "SELECT * FROM  STUDENTPROFILE WHERE NETID = '$nett'";
	$result12 = $con->query($query12);

		if($result12->num_rows > 0){
		
		$option = isset($_POST['chooseOption1']) ? $_POST['chooseOption1'] : false;
   if ($option) {
     if($_POST['chooseOption1']=='Data Sciences'){
		 $change= 'Data Sciences';
	 }
	else if($_POST['chooseOption1']=='Information Assurance'){
		 $change= 'Information Assurance';
	 }
	
	 else if($_POST['chooseOption1']=='Intelligent Systems'){
		 $change= 'Intelligent Systems';
	 }
	
	 else if($_POST['chooseOption1']=='Interactive Computing'){
		 $change= 'Interactive Computing';
	 }
	
	 else if($_POST['chooseOption1']=='Networks and Telecommunications'){
		 $change= 'Networks and Telecommunications';
	 }
	else if($_POST['chooseOption1']=='Systems Track'){
		 $change= 'Systems Track';
	 }
	 else if($_POST['chooseOption1']=='Traditional Computer Science'){
		 $change= 'Traditional Computer Science';
	 }
	
	
	
	 

   } 
   else {
     echo "task option is required";
     exit; 
   }
   

$query = "UPDATE STUDENTPROFILE SET Track = '$change' WHERE NETID = '$nett'";
$result = $con->query($query);
if($result) {
                echo '<br/></br>Your Track is Updated in the system.Thank you.';
			   
        }
		
		
	}
else
{
	echo 'No such NetId exists in the System.Please Cross Check.';
	
		
}	
	}
	
?>

<form action ="" method="post">

<br/><br/><br/>

<h2>NetId(Student):</h2>
<input type="text" name="netid1" required/>


<br/><br/>

	<h2>Choose from the below to change Track:</h2>


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



<?php 
	
	include 'templates/footer.php'; 
	?>