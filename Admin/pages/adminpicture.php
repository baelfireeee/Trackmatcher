					
											
							
								<?php
											include 'adminsession.php';
												if(isset($_POST['upload'])){
													
													$image_tmp = $_FILES['image']['tmp_name'];
													include("../../dbConfig.php");
													
													
													
												$image = $_FILES['image']['name'];
											
											   $sql = "UPDATE `admin` SET image='$image' WHERE admin_id = $adminid";
											   if(mysqli_query($db,$sql)){
													
											
													
													if (move_uploaded_file($image_tmp,"images/$image")){
															
															$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'admin_picture', '$adminid', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('image uploaded successfully')</SCRIPT>"; 
														echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
												
											}
												
														
														}else{
														echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('There was a problem uploading the image')</SCRIPT>"; 
														echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
														}
												
											
												}else{
													echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('There was a problem uploading the image last')</SCRIPT>"; 
														echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
												}
												}
											
											?>