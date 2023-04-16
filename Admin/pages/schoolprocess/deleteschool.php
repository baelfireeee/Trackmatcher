<?php
							include("../../../dbConfig.php");
												
											   $sql = "DELETE FROM school WHERE school_id = '$_GET[id]'";
											if(mysqli_query($db,$sql))
												header("refresh:0.4; url=../school.php");
											else
												echo "NOT DELETED";
										  
										   ?>