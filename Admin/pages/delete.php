<?php
include 'adminsession.php';
							include("../../dbConfig.php");
												
											   $sql = "DELETE FROM testtaker WHERE testtaker_id = '$_GET[id]'";
											if(mysqli_query($db,$sql)){
												
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'delete', '$adminid', 'test taker', '$_GET[id]', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Test Taker Deleted')</SCRIPT>"; 
											
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=testakers.php?page=1\">";
												
											}
												
												
												
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Deleted')</SCRIPT>"; 
											
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=testakers.php?page=1\">";
											}
										   ?>