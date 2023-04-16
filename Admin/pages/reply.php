<?php
	include("../../dbConfig.php");
	include 'adminsession.php';
	$to = $_POST['toemail'];
	$subject = "TRACKMATCHER Response";
	$message = mysqli_real_escape_string($db,$_POST['messageemail']);
	
	$sql = "SELECT * FROM admin WHERE admin_id = '$adminid'";
				  $result = mysqli_query($db,$sql);
				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
					$from = $row['email'];
	$headers = "From: $from\r\n";
	$headers .= "Reply-To: $to\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();
	$url = "http://www.trackmatcher.com/";
	$body  =  "Trackmatcher Response
		-----------------------------------------------
		$message;
		
		
		
		
		Sincerely,
		TrackMatcher.com
		$url;";
	
	
	
	if (mail($to,$subject,$body,$headers)){
	echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Reply Sent')</SCRIPT>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=message.php\">";
	
	
	}else{
		echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Unable to sent reply')</SCRIPT>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=message.php\">";
	}
?>