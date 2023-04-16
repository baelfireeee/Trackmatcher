
<?php
include 'adminsession.php';
include("../../dbConfig.php");
												
													function fncAutoSubmitForm() {
													setTimeout(function(){
														document.getElementById('myform').submit();
													}, 5000);
												}


											  $sql = "SELECT * FROM admin WHERE admin_id='$adminid'";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											  $admin = $results['admin_id'];
											  echo "<body onload='fncAutoSubmitForm();'>";
											    echo '<script>'."\n" ;
												echo 'function fncAutoSubmitForm()'."\n" ;
												echo '{'."\n" ;
												echo 'setTimeout(function()'."\n" ;
												echo '{'."\n" ;
												echo 'document.getElementById(\'myform\').submit();'."\n" ;
												echo '},'.'10);'."\n" ;
												echo '}'."\n" ;
												echo '</script>'."\n" ;
											 
											  echo "<form action=admin.php method=post id=myform name=myform>";
							
											 
											
											  echo "<input type=hidden name=idadmin value='".$results['admin_id']."'/>";
											  echo "<th>"."<center><input type=hidden button id=button type=submit ></inpur></center>"."</th>";
											 
											  echo "</form>";
											  echo "</body>";
											  
										
											 };
		

else{
 echo "Url has no user";
}

?>
