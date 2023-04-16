<?php
 include("dbConfig.php");
			 $comment = mysqli_real_escape_string($db,$_POST['comment']);
			$myfirstname = $_POST['dfirstname'];
	
			$sql = "SELECT * FROM `testtaker` WHERE `firstname` LIKE '%$myfirstname%'";
			$result = mysqli_query($db,$sql);
											  
			 while($results = mysqli_fetch_assoc($result)){
											 
			$testtakerid = $results['testtaker_id'];
											  
			};
											   
				  
			 $sql = "INSERT INTO `comment`(`user_comment`, `testtaker_id`) VALUES ('$comment', '$testtakerid')";
			  $results = mysqli_query($db,$sql);
			if(!$results){
		  die('Could not enter data:'.mysqli_error());
		  echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
		}else{
			echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Comment Sent')</SCRIPT>";
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
		}
		
										
?>