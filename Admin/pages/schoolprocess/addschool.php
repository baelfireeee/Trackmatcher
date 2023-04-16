

<?php
							include '../adminsession.php';
							include("../../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$datetime = 'NOW()';

											   $sql = "INSERT INTO school (school_name, strand_name, admin_id, date_and_time) VALUES ('$_POST[schoname]', '$_POST[straname]', '$adminid', '$datetime')";
											if(mysqli_query($db,$sql))
												header("refresh:0.1; url=../school.php");
											else
												echo "NOT UPDATED";
										  
										   ?>