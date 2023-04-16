<?php
session_start();
   include("dbConfig.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
	  $_SESSION['passwordmy'] = $_POST['psw']; 
      $mypassword = md5($_POST['psw']); 
	  
	 
				  $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword'";
				  $result = mysqli_query($db,$sql);
				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
					$admin = $row['admin_id'];
				  
				  $count = mysqli_num_rows($result);
				  
				  // If result matched $myusername and $mypassword, table row must be 1 row
					
				  if($count == 1) {
				  
					$_SESSION['idadmin'] = $admin;

				   $sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'login', '$admin', 'admin', '$admin', CURRENT_TIMESTAMP)";
				   if(mysqli_query($db,$sql1)){
												header("location: Admin/pages/admin.php");
							 session_write_close();
												 
											}
				  }else {
					 // If the row vairble does not equal the pass variable then an error occurs.
					
							if(isset($_COOKIE['login'])){
								if($_COOKIE['login'] < 4){
									$attempts = $_COOKIE['login'] + 1;
									setcookie('login', $attempts, time()+60*10); //set the cookie for 10 minutes with the number of attempts stored
									echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Username or Password are invalid')</SCRIPT>"; 
									include 'invalidlogin.php';
											} else{
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('You\'ve had your 5 failed attempts at logging in and you are banned for 10 minutes. Try again later!')</SCRIPT>"; 
												
												include 'index.php';
											};
									} else {
								setcookie('login', 1, time()+60*10); //set the cookie for 10 minutes with the initial value of 1
									
					include 'invalidlogin.php';
				  }
				  }
   }

?>