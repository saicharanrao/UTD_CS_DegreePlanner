<?php



function userlogged(){
	return (isset($_SESSION['user_id']))?true:false;
}


function userdata($userid){
	$data=array();
	$userid=(int)$userid;
	
	$NumOfArgs=func_num_args();
	$GetArgs=func_get_args();
	
	if($NumOfArgs>1){
		unset($GetArgs[0]);
		
		$str1='`'.implode('`,`',$GetArgs).'`';
		echo $str1;
		
		
	}
	
}
function userexists($netid){
	$servername = "localhost";
$username = "root";
$password = "";
$dbname="charan";

	$con11= new mysqli($servername, $username, $password,$dbname);
	$sql = "Select * from users where netid = '$netid'";
	$result1 = $con11->query($sql);
	 if ($result1->num_rows > 0)
	{
		while($row = $result1->fetch_assoc()) 
		{
			return false;
			break;
		}
	}
	else
		return true;
	
}


	
?>