
<html>

		<body>
			<div id="div1" class="container">

				<form role="form" method="get" action="Trackselection.php">
					<div class="form-group">
						<br/><h1 align="center"> Student Profile Form</h1></div>
						<p><h3>Name(First,Last):<?php echo $result3['FIRSTNAME'].'  '.$result3['LASTNAME'].'<br/>';?></h3></p>
						<p><h3>UTD ID:<?php echo $result3['UTDID'].'<br/>';?></h3></p>
						<p><h3>NET ID:<?php echo $result3['NETID'].'<br/>';?></h3></p>
						
						<p><h3>Email ID:<?php echo $result3['EMAIL'].'<br/>';?></h3></p>
						<p><h3>Major : Computer Science</h3></p>
						<p><h3>Track:<?php echo $result4['TRACK'].'<br/>';?></h3></p>
						<p><h3>Admitted:<?php echo $result4['ADMITTED'].'<br/>';?></h3></p>
						<p><h3>Expected Graduate Date:<?php echo $result4['EXPGRDATE'].'<br/>';?></h3></p>
						<p><h3>Courses Taken:<?php echo $result8['CCOUNT'].'<br/>';?></h3></p>
						<p><h3>Courses Waived:<?php echo $result4['COUWAIVE'].'<br/>';?></h3></p>
						<p><h3>GPA(Overall):<?php echo $result88['CGPA'].'<br/>';?></h3></p>
						


						<button type="submit" class="btn btn-default">Continue</button>

																</form>
																<form role="form" method="get" action = "CoursesTaken.php">
					<button type = "submit" class= "btn btn-default">View Courses Taken</button>
					</form>
															</div>
															
															
														</body>
		
													</html>
													