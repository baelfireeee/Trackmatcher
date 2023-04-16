<?php
							include("../../dbConfig.php");
								include 'adminsession.php';				
											   $sql = "DELETE FROM comment WHERE comment_id = '$_GET[id]'";
											if(mysqli_query($db,$sql)){
												
												
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'delete', '$adminid', 'comment', '$_GET[id]', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Comment Deleted')</SCRIPT>"; 
											
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=comment.php\">";
												
											}
												
												
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Comment Not Deleted')</SCRIPT>"; 
											
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=comment.php\">";
											}
										   ?>