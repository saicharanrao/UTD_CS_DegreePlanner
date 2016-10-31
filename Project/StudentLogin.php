<?php include 'dbconnections/init.php'; ?>

<?php include 'templates/all/overheader.php'; ?>

<?php
global $result3;
if($result3['ADMIN']== 1){
	echo '<html><body><h1>Welcome Back , Admin!!!!</h1></body></html>';


echo'
<html>
<body>
<h3>Read options:</h3>

<ul>
<li><a href="read_user.php"  >View user</a> </li>
<li><a href="read_dplan.php" >View DegreePlan</a></li>
<li><a href="read_course.php" >View Course</a> </li>
</ul>

<h3>User options:</h3>

<ul>
<li><a href="adduser.php"   >Add user</a> </li>
<li><a href="deleteuser.php"  >Delete user</a></li>
<li><a href="updateuser.php"  >Update user</a> </li>
<li><a href="changestudtrack.php"  >Change Student Track</a> </li>

</ul>

<h3>DegreePlan options:</h3>

<ul>
<li><a href="add_degreeplan.php"  >Add DegreePlan </a> </li>
<li><a href="delete_degreeplan.php"  >Delete DegreePlan </a></li>
<li><a href="update_degreeplan.php"  >Update DegreePlan </a> </li>
</ul>

<h3>Course Options:</h3>

<ul>
<li><a href="add_course.php "  >Add Course </a> </li>
<li><a href="delete_course.php"  >Delete Course </a></li>
<li><a href="update_course.php"  >Update Course </a> </li>
</ul>

<ul>
<li><a href="courselisting.php "  >Course Listing </a> </li>
</ul>
<h4><a href="resetpwd.php"  >Student Password Reset </a></h4>
</html>
</body>';
}
else if((userlogged()==true)&&($result3['ADMIN']== 0)){
	if($result3['ISFIRST']==0)
	{
	
	include 'ack.php';
	}
	else{
		
		include 'studentprofile_already.php';
	}
}
else if($result3['ADMIN']== 2){
	echo '<html><body><h1>Welcome Back , Advisor!!!!</h1></body></html>';


echo'
<html>
<body>
<h3>Your options:</h3>

<ul>
<li><a href="createadvising.php"   >Create Advising Event</a> </li>
<li><a href="viewadv.php"  >View Reservations</a></li>
<li><a href="modifyadv.php"  >Modify Advising Event</a> </li>

<li><a href="deleteadv.php"  >Delete Advising Event</a> </li></br></br></br>
<li><a href="addstudadv.php"  >Add Student reservation</a> </li>
<li><a href="deletestudadv.php"  >Delete Student Reservation</a> </li>



</ul>




</html>
</body>';
}
?>
</div></div>


<?php 
	include 'templates/footer.php'; 
	?>


