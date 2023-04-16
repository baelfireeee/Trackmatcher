<?php
	 include 'adminsession.php';
   include("../../dbConfig.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mynewpassword = mysqli_real_escape_string($db,$_POST['newpass']);
	  $mynewpassconfirm = mysqli_real_escape_string($db,$_POST['newpasses']);
      $mypassword = md5($_POST['oldpass']);
	  
			  
       
      $sql = "SELECT * FROM admin WHERE admin_id = '$adminid' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$admin = $row['admin_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
											if($mynewpassword==$mynewpassconfirm){
												$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
												
												if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,100}$/', $mynewpassword)){
															echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Unable to Update Password, New Password should atleast 8 characters long,a number, a Combination of Uppercase and Lowercase Letters and Special Characters')</SCRIPT>";
														echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											
											}else{
												$newpass = md5($mynewpassword);
											   $sql = "UPDATE `admin` SET password='$newpass', hash='$mynewpassword', date_and_time=NOW() WHERE admin_id='$adminid'";
													if(mysqli_query($db,$sql)){
													$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'admin_password', '$adminid', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Succesfully Change Password. You will be logout.')</SCRIPT>"; 
														echo "<meta http-equiv=\"refresh\" content=\"0;URL=logout.php\">";
												
											}
													}else{
													echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Password is already taken')</SCRIPT>"; 
													echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
													}
												}
											
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Password Do not Match')</SCRIPT>"; 
											echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											}
       
         
      }else {
         
		echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Invalid Password')</SCRIPT>"; 
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
      }
   }
?>

										   
										 