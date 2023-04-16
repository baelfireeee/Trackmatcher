<?php
							include 'adminsession.php';
							include("../../dbConfig.php");
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$strandname =   mysqli_real_escape_string($db,$_POST['sname']);
												$strandschool =   mysqli_real_escape_string($db,$_POST['sschool']);

											   $sql = "INSERT INTO strand (strand_name, strand_code, strand_school, track_id, admin_id) VALUES ('$strandname', '$_POST[rcode]', '$strandschool', '$_POST[tid]', '$adminid')";
											if(mysqli_query($db,$sql)){
												
												$sql2 = "SELECT * FROM `strand` ORDER BY `strand_id` DESC LIMIT 1";
											  $result = mysqli_query($db,$sql2);
											  
											  
											   while($results = mysqli_fetch_assoc($result)){
												   $strandid = $results['strand_id'];
												   
											  $sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'create', '$adminid', 'strand', '$strandid', CURRENT_TIMESTAMP)";
											  
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Add Strand')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=strands.php\">";
											}
											  };
												
												
												
												
												
												
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=strands.php\">";
											}
										   ?>