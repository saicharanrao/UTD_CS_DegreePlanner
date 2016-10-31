<aside>
	<?php 
	if(userlogged()===true){
		
		if($result3['ADMIN']== 0){
		include 'templates/widgets/AfterloginStud.php';
		}
		else
			include 'templates/widgets/Afterlogin.php';
	}
	else
	include 'templates/widgets/login.php'?>
</aside>