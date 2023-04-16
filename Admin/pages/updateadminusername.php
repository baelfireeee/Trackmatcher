<?php
	 include 'adminsession.php';
   include("../../dbConfig.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $mynewusername = mysqli_real_escape_string($db,$_POST['newusername']);
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
			  
       
      $sql = "SELECT * FROM admin WHERE admin_id = '$adminid' and username = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$admin = $row['admin_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
			$date = new DateTime("NOW");
												$futuredate = $date->format('Y-m-d H:i:s');
								
											   $sql = "UPDATE `admin` SET username='$mynewusername', date_and_time=NOW() WHERE admin_id='$adminid'";
											if(mysqli_query($db,$sql)){
												$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'update', '$adminid', 'admin_username', '$adminid', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully Change Username')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
												
											}
												
											}else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Username is not available')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
											}
       
         
      }else {
         
		echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Invalid Username')</SCRIPT>"; 
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminprofile.php\">";
      }
   }
?>

										   
										 