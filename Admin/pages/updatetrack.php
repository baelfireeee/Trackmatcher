<?php
							include 'adminsession.php';
							include("../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$tname = mysqli_real_escape_string($db,$_POST['tname']);
												$rcode = mysqli_real_escape_string($db,$_POST['rcode']);
												$tschool = mysqli_real_escape_string($db,$_POST['tschool']);
												
											   $sql = "UPDATE `track` SET track_name='$tname', riasec_code='$rcode', track_school='$tschool', admin_id='$adminid', date_and_time=NOW() WHERE track_id='$_POST[tid]'";
											if(mysqli_query($db,$sql)){
												
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'tracks', '$_POST[tid]', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
												
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=tracks.php\">";
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Updated Track')</SCRIPT>"; 
											}

											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated')</SCRIPT>"; 
												
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=tracks.php\">";
											}
										   ?>