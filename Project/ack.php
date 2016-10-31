
<html>
	
				<body>
					<p>
						<h4>Graduate Computer Science Department</h4>
					</p>

					<br />
					<p>
						<h2>Master’s Acknowledgment of Policies Form</h2>
					</p>
					<br />
					<p> ** All students must read, complete, sign, and date this form upon entrance to the Graduate CS Department** </p>
					<div id="div1" class="container">

						<form role="form" method="" action="studentprofile.php" >
						
								<p><h3>Name(First,Last):<?php echo $result3['FIRSTNAME'].'  '.$result3['LASTNAME'].'<br/>';?></h3></p>
								<p><h3>UTD ID:<?php echo $result3['UTDID'].'<br/>';?></h3></p>
								<p><h3>First Semester in Graduate Program: Spring 2016</h3></p>
									
										<p>
											<strong>Degree Plan(Please check one)</strong>
										</p>
										<fieldset id="group1">
											<input type="radio" name="group1" value="Traditional" >Traditional CS
												<input type="radio" name="group1" value="Network" >Networks and Traditional Communications
													<input type="radio" name="group1" value="Intelligent" >Intelligent Systems
														<input type="radio" name="group1" value="Systems" >SYSTEMS
															<input type="radio" name="group1" value="SWE" >Software Engineering
																<input type="radio" name="group1" value="IA" >Information Assurance
																	<input type="radio" name="group1" value="Datascience" checked>Data Science
																		<input type="radio" name="group1" value="IC" >Interactive Computing


																		</fieldset>
																		<p>
																			<strong>Prerequisites I was assigned in my admission letter/email (check all that apply): </strong>
																		</p>
																		<fieldset id="group2">
																			<input type="radio" name="group2" value="cs5303" >Computer Science I
																				<input type="radio" name="group2" value="cs5330" >Computer Science II
																					<input type="radio" name="group2" value="cs5333" >Discrete Structures
																						<input type="radio" name="group2" value="cs5343" >Data Structures
																							<input type="radio" name="group2" value="cs5348" >Operating Systems
																								<input type="radio" name="group2" value="cs5349" >Automata theory
																									<input type="radio" name="group2" value="cs5354" >Software Engineering
																										<input type="radio" name="group2" value="cs5390" >Computer Networks
																											<input type="radio" name="group2" value="cs3341" >Probabilty & Statistics


																											</fieldset>
																											<p>
																												<b> By initialing each item below, I indicate that I understand the following policies of The University of Texas at
																													Dallas and the Graduate Computer Science Department:</b>
																											</p>
																											<INPUT TYPE=CHECKBOX NAME="prereq" checked>I must take all my <b>assigned prerequisites</b> unless it has been officially waived by the department or is
																												not a requirement of my track/degree plan. <BR>
																													<INPUT TYPE=CHECKBOX NAME="advisor" checked> I must meet with a <b>Faculty Academic Advisor</b> at least once a year to be advised<BR>
																															<INPUT TYPE=CHECKBOX NAME="enroll" checked> I know that I will not be allowed to enroll in a <b>closed course</b>. No exceptions. No waitlists.<BR>
																																	<INPUT TYPE=CHECKBOX NAME="coursetime" checked>There is a <b>6-year window</b> to complete all coursework. <BR>
																																			<INPUT TYPE=CHECKBOX NAME="gpa" checked>
																																				<b>GPA</b> is calculated on the + and – scale (A, A-, B+, B, B-, C+, C). <BR>
																																					<INPUT TYPE=CHECKBOX NAME="coregpa" checked> I must have a <b>core GPA ≥ 3.19</b>, an <b>elective GPA ≥ 3.0,</b> and an <b>overall GPA ≥ 3.0</b> to graduate
																																						<BR>
																																							<INPUT TYPE=CHECKBOX NAME="times"  checked> I may only <b>repeat</b> a course two times; I can only have a total of three <b>repeats</b> across all courses
																																								<BR>
																																									<INPUT TYPE=CHECKBOX NAME="deadline" checked> I must make up any <b>incomplete (I)</b> grades by the deadline or it will turn into an F on my transcript
																																										<BR>
																																											<INPUT TYPE=CHECKBOX NAME="paperwork" checked>I know I must complete additional paperwork to change my major/program from <b>CS to SE</b> or from
																																												<b>SE to CS</b> at least two semesters prior to graduation. 
																																												<BR>

																																													<INPUT TYPE=CHECKBOX NAME="NoofLectures" checked> I know that if I miss three or more lectures in the beginning of any semester, I may be dropped or
																																														reassigned to another course in that semester. 
																																														<br>
																																															<br>
																																																<button type="submit" class="btn btn-default">Submit</button>



																																															</form>		  
																																														</div>

																																													</body>
																																												</html>