<?php

function avoidinject($data){
	return mysql_real_escape_string($data);	
}


function userredirect(){
	if(userlogged()===true){
		header('Location:StudentLogin.php');
		exit();
	}
	
}
function userredirect3(){
	if(userlogged()===true){
		header('Location:Index.php');
		exit();
	}
	
}

function protect(){
	if(userlogged()===false){
		header('Location:StudentLogin.php');
		exit();
	}
}

function aprotect(){
	global $result3;
	if($result3['ADMIN']== 1){
		
		header('Location:StudentLogin.php');
		exit();
	}
}
function userredirect2(){
	global $result3;
	if($result3['ADMIN']!= 1){
		header('Location:StudentLogin.php');
		exit();
	}
	
}



?>