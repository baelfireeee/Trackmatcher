<?php
						date_default_timezone_set("Asia/Manila");
							include("../../dbConfig.php");
												
												
												$message = mysqli_real_escape_string($db,$_POST['message']);
												$name = mysqli_real_escape_string($db,$_POST['name']);

											   $sql = "INSERT INTO message (user_message, name, email_address, admin_id) VALUES ('$message', '$name', '$_POST[email]', NULL)";
											if(mysqli_query($db,$sql)){
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Your Message has been Sent. Wait the reply to your email.')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=../../index.php\">";
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Something went wrong')</SCRIPT>";
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=../../index.php\">";
											}
										   ?>