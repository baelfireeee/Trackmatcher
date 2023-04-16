
<?php
							include '../adminsession.php';
							include("../../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$riasecdefined = mysqli_real_escape_string($db,$_POST['riasecdefined']);
											   $sql = "UPDATE `riasec` SET `riasec_name`='$_POST[riasecname]', `riasec_defined`='$riasecdefined', `admin_id`='$adminid', `date_and_time`=NOW() WHERE `riasec_id`='$_POST[riasecid]'";
											if(mysqli_query($db,$sql)){
												
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'RIASEC result', '$_POST[riasecid]', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=../Others.php\">";
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Updated RIASEC')</SCRIPT>";
												
											}
												
												 
												
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=../Others.php\">";
												
											}
											
										   ?>