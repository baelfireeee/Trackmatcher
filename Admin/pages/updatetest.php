			
					<?php
							include 'adminsession.php';
							include("../../dbConfig.php");
							if(isset($_POST['update'])){
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												$testquestion =  mysqli_real_escape_string($db,$_POST['question']);
											   $sql = "UPDATE `test` SET test_question='$testquestion', admin_id='$adminid', date_and_time=NOW() WHERE test_code='$_POST[testcode]' and testLanguage_id='$_POST[testlang]'";
											if(mysqli_query($db,$sql)){
												
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'test questions', '$_POST[testid]', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=testquestions.php\">";
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Updated Test Question')</SCRIPT>";
												
											}
												
												 
												
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=testquestions.php\">";
												
											}
											}
										   ?>
								