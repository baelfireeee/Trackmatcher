<?php
							
							include("../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$md5pass = $_POST['password'];
												$lastname =   mysqli_real_escape_string($db,$_POST['lastname']);
												$middlename =   mysqli_real_escape_string($db,$_POST['middlename']);
												$firstname =   mysqli_real_escape_string($db,$_POST['firstname']);
												$username =   mysqli_real_escape_string($db,$_POST['username']);
												$emailadd =   mysqli_real_escape_string($db,$_POST['emailadd']);
												
											if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,100}$/', $md5pass)){
															echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Unable to Create Admin, Password should atleast 8 characters long,a number, a Combination of Uppercase and Lowercase Letters and Special Characters')</SCRIPT>";
														echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											
											}else{
												$password = md5 ($md5pass);
											 
											  
											   
											   $sql = "INSERT INTO `trackmatcher`.`admin` (`admin_id`, `lastname`, `middlename`, `firstname`, `username`, `password`, `image`, `email`, `hash`, `date_and_time`) VALUES (NULL, '$lastname', '$middlename', '$firstname', '$username', '$password', '', '$emailadd', '$md5pass', CURRENT_TIMESTAMP)";
											   
											   if(mysqli_query($db,$sql)){
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Add Admin')</SCRIPT>";
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Unable to Add Admin')</SCRIPT>";
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											}
											   
												}
										   ?>