<?php
 include 'adminsession.php';
							include("../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$firname = mysqli_real_escape_string($db,$_POST['firname']);
												$midname = mysqli_real_escape_string($db,$_POST['midname']);
												$lasname = mysqli_real_escape_string($db,$_POST['lasname']);
												$email = mysqli_real_escape_string($db,$_POST['email']);
											   $sql = "UPDATE `admin` SET firstname='$firname', middlename='$midname', lastname='$lasname', email='$email', date_and_time=NOW() WHERE admin_id='$adminid'";
											if(mysqli_query($db,$sql)){
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'admin_BasicInfo', '$adminid', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Updated info')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
												
											}
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											}
										   ?>