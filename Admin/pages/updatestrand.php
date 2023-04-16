<?php
							include 'adminsession.php';
							include("../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$strandname =   mysqli_real_escape_string($db,$_POST['sname']);
												$strandschool =   mysqli_real_escape_string($db,$_POST['sschool']);
											   $sql = "UPDATE `strand` SET strand_code='$_POST[scode]', strand_name='$strandname', strand_school='$strandschool', track_id='$_POST[tid]', admin_id='$adminid', date_and_time=NOW() WHERE strand_id='$_POST[sid]'";
											if(mysqli_query($db,$sql)){
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'strands', '$_POST[sid]', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Updated Strand')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=strands.php?page=1\">";
												
											}
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated')</SCRIPT>"; 
												
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=strands.php\">";
											}
										   ?>