<?php

session_start();
require 'db/connections.php';
require 'functions/users.php';
require 'functions/simplefunctions.php';


if(userlogged()=== true)
{	
$result3=array();
$var11=$_SESSION['user_id'];
	//$userdata=userdata($var11,'userid','password','netid','firstname','lastname','email');
	$query2 = "SELECT USERID,UTDID,Username,Password,FIRSTNAME,LASTNAME,NETID,EMAIL,ADMIN,ISFIRST FROM USERS WHERE USERID='$var11'";
		
		$result3 = mysqli_fetch_assoc($con->query($query2));
		
		
		$var12=$result3['NETID'];
		$query4 = "SELECT TRACK,ADMITTED,EXPGRDATE,COUWAIVE,CTAKEN,GPA,NETID FROM STUDENTPROFILE WHERE NETID= '$var12'";
		$result4 = mysqli_fetch_assoc($con->query($query4));
		
		$query6 = "UPDATE USERS SET ISFIRST='1' WHERE USERID='$var11'";
		
		$result5 = ($con->query($query6));
		
		$query8 = "SELECT COUNT(*) AS CCOUNT FROM COURSESTAKEN WHERE NETID= '$var12'";
		$result8 = mysqli_fetch_assoc($con->query($query8));
		
		$query88 = "SELECT ROUND(AVG(GPA),3) AS CGPA FROM COURSESTAKEN WHERE NETID= '$var12'";
		$result88 = mysqli_fetch_assoc($con->query($query88));
		
		$query55 = "SELECT A.COURSENAME,B.COURSEID,B.GPA FROM ALLCOURSES A , COURSESTAKEN B WHERE A.COURSEID = B.COURSEID AND B.NETID= '$var12'";
		$result55 = mysqli_fetch_assoc($con->query($query55));
		
		
		
		
	}
$errors=array();
?>