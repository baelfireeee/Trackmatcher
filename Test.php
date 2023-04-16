<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="img/icon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>TrackMatcher | Find your Track and Strand</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
	
	
	<!--JavaScript-->
	
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
				
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
					
                <a class="navbar-brand" href="#page-top" style="font-size:20px">T R A C K <text style="color:maroon">M A T C H E R </text></a>
			
					
            </div>
			
			

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="height:100%">
                    
					
					<li class="page-scroll">
                        <a href="index.php#createprofile">TAKE THE TEST</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#portfolio">TRACKS & STRANDS</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#holland">HOLLAND CODES</a>
                    </li>          
					<li class="page-scroll">
                        <a href="index.php#contact">CONTACT US</a>
                    </li>
					<li class="page-scroll">
                        <a href="index.php#about">ABOUT US</a>
                    </li>
					<li class="page-scroll">
                     
				<a  href="#LoginModal" data-toggle="modal">LOGIN</a>
						
                    </li>
					
				
			
					
					
			
				
					
					
				
               
				</div>
					
		

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 <section id="test">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
                    
                    <h2 style="color:maroon">RIASEC Personality Test</h2>
                    <hr class="star-primary">
                
				<center><img class="img-responsive" src="img/account.png" alt="" style="width: 200px; height:175px;"></center>
				<p style="color: #06356f">Welcome <h4 style="color: maroon"><?php echo $_POST["fname"];?></h4><br></p>
				</div>
                
            </div>
			<div class="col-lg-8 col-lg-offset-2 text-center" style="color: #06356f">
                        <p style="text-align: justify">INSTRUCTIONS</br></br>The test consists of 48 tasks that you will have to rate by how much you would enjoy performing each on a scale of (1) dislike (2) slightly dislike (3) neither like not dislike (4) slightly enjoy (5) enjoy. The test will take most five to ten minutes to complete.<p></br></br><p>NOTE: This Test will only give you an insight about your interest in different tasks or works and will give you suggestions of Tracks and Strands you may take up in SHS (Senior High School).</p></br><p style="font-size: 15px">*Rotate Landscape (Recommended) if you are using a Smartphone.</p></br>
						<h4>Choose the Language of the Test you prefer</h4>
							  
							  <div>
							  <div class="panel-group" id="accordion">
								<div class="panel panel-info">
								  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									<h4 class="panel-title">
									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Filipino
									   <span class="glyphicon glyphicon-chevron-down"></span></a>
									</h4>
								  </div>
								  <div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body"><?php include 'riasec/langtest/filipino.php';?></div>
								  </div>
								</div>
								
								<div class="panel panel-primary">
								  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									<h4 class="panel-title">
									  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">English
									   <span class="glyphicon glyphicon-chevron-down"></span></a>
									</h4>
								  </div>
								  <div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body"><?php include 'riasec/langtest/english.php';?></div>
								  </div>
								</div>
								
							  </div>
							</div>
							  
							  
							  
							  
                    </div>
					</br>
					</br>
					

						
					
				
    </section>
		<div class="portfolio-modal modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-hidden="true">
        
            
            <div class="container" style="margin-top: 70px">
            <div class="row">
				
			<div class="col-sm-6 col-lg-offset-3">
							
						<div class="panel panel-primary">
						  <div class="panel-heading"><h4>Admin Login</h4></div>
						  <div class="panel-body">

					<form action="loginprocess.php" method="post">
							<div class="logincontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
									<label><b>Username</b></label>
										<input type="text" placeholder="Enter Username" name="uname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required data-validation-required-message="Please enter your username.">

									<label><b>Password</b></label>
										<input type="password" placeholder="Enter Password" name="psw"required data-validation-required-message="Please enter your password.">
        
									<button type="submit" class="widebtn">Login</button>
									<input type="checkbox" checked="checked"> Remember me
						</div>

									<div class="footercontainer" style="background-color:#fff; margin-bottom: 20px">
										<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-left:35px" data-dismiss="modal">Cancel</button>
										
										
									</div>
									</form>
						  </div>
						</div>		
					
					
					</div>
		

						
			</div>
                
            
        </div>
    </div>
	

	
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
                                <a href="https://www.facebook.com/trackmatcher/" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/communities/118095948041267775852" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/trackmatcher" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/general.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
	<link href='riasec/langtest/table-fixed-header.css' rel='stylesheet' />
  <script src="riasec/langtest/table-fixed-header.js"></script>
 
  <script src="riasec/langtest/script.js"></script>

</body>

</html>
