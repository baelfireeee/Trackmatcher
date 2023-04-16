<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="../../img/icon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TrackMatcher | Find your Track and Strand</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../../css/freelancer.css" rel="stylesheet">
	
	
	<!--JavaScript-->
	
    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	
	<div class="container">
	
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll" >
				
					
                <a class="navbar-brand" href="../../index.php" style="font-size:20px">T R A C K <text style="color:maroon">M A T C H E R </text></a>
			
					
            </div>
			
			

      
					
		

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<section id="InvalidLogin">
	
								
		<div class="container">
            <div class="row">
				
			<div class="col-sm-6 col-lg-offset-3">
							
						<div class="panel panel-primary">
						  <div class="panel-heading"><h4>Forgot Password</h4></div>
						  <div class="panel-body">

						<form action=forgotpassword.php method="post">
							<div class="logincontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
									<label><b>Username</b></label>
										<input type="text" placeholder="Enter Username" name="uname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required ">

									
        
									<button type="submit" class="widebtn btn btn-lg btn-warning" name="submit">Retrieve Password</button>
									
										</div>
										</br>
									<div class="footercontainer" style="background-color:#fff; margin-bottom: 20px">
										<a type="button" href="../../index.php" value="Cancel" class="cancelbtn" style="margin-left:35px; color: #fff">Cancel</a>
										
									</div>
									</form>
						  </div>
						</div>		
					
					
					</div>
		

						
			</div>
					
					
					
					
		 
				  </div>
				
	</section>


<?php session_start();
include "../../dbConfig.php"; //connects to the database
if (isset($_POST['submit'])){
	$username = $_POST['uname'];
	$query="SELECT * FROM `admin` WHERE username='$username'";
	$result   = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysqli_fetch_array($result);
		$pass  =  $rows['password'];//FETCHING PASS
		$hash = $rows['hash'];
		$to = $rows['email'];
		
		if ($to!="") {
		//Details for sending E-mail
		$from = $email;
		$url = "http://www.trackmatcher.com/";
		$body  =  "Trackmatcher password recovery Script
		-----------------------------------------------
		
		Url : $url;
		email Details is : $to;
		Here is your password  : $hash;
		Sincerely,
		Track Matcher";
		$from = "anjhi2923@gmail.com";
		$subject = "Track Matcher Password recovered";
		$headers1 = "From: $from\n";
		$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Priority: 1\r\n";
		$headers1 .= "X-MSMail-Priority: High\r\n";
		$headers1 .= "X-Mailer: Just My Server\r\n";
		$sentmail = mail ( $to, $subject, $body, $from );
		
	     
		}else{
		echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Invalid Username')</SCRIPT>";
		
		}
	} else {
	if ($to=="") {
	    echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Invalid Username')</SCRIPT>"; 
		}
		}
	//If the message is sent successfully, display sucess message otherwise display an error message.
	if($sentmail==1)
	{
		echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Your password was successfully sent to your email')</SCRIPT>"; 
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=../../index.php\">";
	}
		else
		{
		if($to !="")
		echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Your password was NOT successfully sent to your email')</SCRIPT>"; 
	}
}
?>



	

	
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>San Roque Tarlac City
                            <br>Tarlac 2360</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Follow Us</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/trackmatcher/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/communities/118095948041267775852" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/trackmatcher" class="btn-social btn-outline" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>TrackMatcher</h3>
                        <p>TrackMatcher is a free to use, open source Personality Test based on RIASEC Markers Scales and Items created by <a href="http://jrounds.weebly.com/riasec-markers-scalesitems.html">James Rounds </a>and It is powered by <a href="h#">Tarlac National High School</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; TrackMatcher 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
	<script src="../../js/general.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../js/freelancer.min.js"></script>

</body>

</html>
