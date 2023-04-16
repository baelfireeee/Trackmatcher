<?php


include 'adminsession.php';
include("../../dbConfig.php");
$_SESSION = array();
$sql = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'logout', '$adminid', 'admin', '$adminid', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql)){
													session_destroy();
												header("location:../../index.php");
												
											}


?>