

<?php
							include '../adminsession.php';
							include("../../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');

											   $sql = "UPDATE `school` SET school_name='$_POST[schoolname]', strand_name='$_POST[strandname]', admin_id='$adminid', date_and_time=NOW() WHERE school_id='$_POST[schoolid]'";
											if(mysqli_query($db,$sql))
												header("refresh:0.3; url=../school.php");
											else
												echo "NOT UPDATED";
										  
										   ?>