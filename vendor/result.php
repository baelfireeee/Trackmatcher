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
                        <a href="index.php #createprofile">TAKE THE TEST</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php #portfolio">TRACKS & STRANDS</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php #holland">HOLLAND CODES</a>
                    </li>          
					<li class="page-scroll">
                        <a href="index.php #contact">CONTACT US</a>
                    </li>
					<li class="page-scroll">
                        <a href="index.php #about">ABOUT US</a>
                    </li>
					<li class="page-scroll">
                     
				<a  href="#LoginModal" data-toggle="modal">LOGIN</a>
						
                    </li>
					
				
				</div>
           <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav><!--nav-->
	<div class="content">
	<section id="Result">
	<?php include 'fortop3.php';?>
								
		<div class="container">
            <div class="row">
				<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="color:maroon">Result of your Test</h2>
                    <h3 style="color:#06356f">
						<?php echo $_POST["profilename"];?>
						<?php echo $_POST["middlename"];?>
						<?php echo $_POST["lastname"];?>
					
					
					<?php
										   include("dbConfig.php");
										   $myfirstname = $_POST['profilename'];
											$mymiddlename = $_POST['middlename'];
											$mylastname = $_POST['lastname'];
											$myage = $_POST['age'];
											$mygender = $_POST['gender'];
											$mylocation = $_POST['location'];
											$myschool = $_POST['school'];
											$myemail = $_POST['email'];
											$mylanguage = $_POST['language'];
											$myresult = $result;
										   
											  $sql = "INSERT INTO `user`(`user_id`, `lastname`, `middlename`, `firstname`, `age`, `gender`, `email`, `location`, `school_name`, `testLanguage_code`, `result_code`) VALUES ('NULL', '$mylastname', '$mymiddlename', '$myfirstname', '$myage', '$mygender', '$myemail', '$mylocation', '$myschool', '$mylanguage', '$myresult')";
											  $results = mysqli_query($db,$sql);
											   if(! $results){
												   die('Could not enter data:'.mysqli_error());
											   }
											
											
										?>
					
					</h3>
					<hr class="star-primary" style="color:maroon">
                </div>
				</div>
			<div class="row">
			
							
				<div class="chart1">			
					<div class="col-md-6">
					<div class="panel panel-info">
						  <div class="panel-heading">
							<P class="panel-title"><p>The Holland Codes system breaks down occupations into six general categories, your affinity for each is below:</p></P>
						  </div>
						  <div class="panel-body">
							
						<p>Realistic<p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo ($R);?>"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($R);?>%">
							
							</div>
						</div>
						<p>Investigative<p>
						<div class="progress">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo ($I);?>"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($I);?>%">
							
							</div>
						</div>
						<p>Artistic<p>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo ($A);?>"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($A);?>%">
							
							</div>
						</div>
						<p>Social<p>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo ($S);?>"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($S);?>%">
							
							</div>
						</div>
						<p>Entreprising<p>
						<div class="progress">
							<div class="progress-bar progress-bar-present" role="progressbar" aria-valuenow="<?php echo ($E);?>"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($E);?>%">
						
							</div>
						</div>
						<p>Conventional<p>
						<div class="progress">
							<div class="progress-bar progress-bar-failed" role="progressbar" aria-valuenow="<?php echo ($C);?>"aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($C);?>%">
							
							</div>
						</div>
						  </div>
						</div>

						
					</div>
					<div class="col-md-6">
						<h4 class="text-center">Here are some insight about your result</h4></br>
						<p>A Holland Code summarizes your results with an acronym for the categories you score highest for, which makes you a/an <?php echo "<strong>".$result."</strong>" ?>.</p>
						
						<div class="content">
							<?php include 'forriasec.php'?>
						</div>
					
					</div>
						</div>  
					<div class="col-md-12 text-center">
						
						<p>Keep in mind that these results are only limited to Tracks and Strands that are available in Tarlac City. We do not Required you to take one of the result but giving you suggestions what you can take up in Grade 11 or Senior based on your interests. </p>
						</div><!--possible tracks-->
					
					<div class="col-sm-9 portfolio-item">
					<div class="panel panel-primary">
							
							 <div class="panel-heading" style="text-align: center"><h4>Suggested Tracks and Strands</h4></div>
							  <table class="table table-striped toggle-circle-filled">
								<thead>
								<tr>
									<th style="color: #06356f">TRACKS</th>
								</tr>
								</thead>
								<tbody>
									<?php
										   include("dbConfig.php");
											  $myresult1 = $result1;
											  $sql = "SELECT * FROM `track` WHERE `track_code` LIKE '%$myresult1%'";
											  $result = mysqli_query($db,$sql);
											  
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<tr>";
											  echo "<th>".$results['track_name']."</th>";
											  echo "</tr>";
											  };
										?>
								</tbody>
							  </table></br>
							  
							  <table class="table table-striped toggle-circle-filled">
								<thead>
								<tr>
									<th style="color: #06356f">STRANDS</th>
								</tr>
								</thead>
								<tbody>
									<?php
										   include("dbConfig.php");
												
											  $myresult1 = $result1;
											  $sql = "SELECT * FROM `strand` WHERE `strand_code` LIKE '%$myresult1%' ORDER BY `strand_code` ASC";
											  $result = mysqli_query($db,$sql);
											  
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<tr>";
											  echo "<th>".$results['strand_name']."</th>";
											  echo "</tr>";
											  };
										 
										?>
								</tbody>								
							  </table>														  
							</div>						
						</div>
						
						<div class="col-sm-3 portfolio-item">
							<div class="panel panel-primary">
							
							  <div class="panel-heading" style="text-align: center"><h4>Search The Location of each Track and Strand Here</h4></div>

							
							  <table class="table table-striped toggle-circle-filled">
								<thead>
								<tr>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for..." style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" >
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" style=" width: 100%; padding: 6px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">Go!</button>
									</span>
									</div>
								</tr>
								</thead>
								<tbody>
									
									<?php
										   include("dbConfig.php");
												
											  $myresult1 = $result1;
											  $sql = "SELECT * FROM `track` WHERE `track_code` LIKE '%$myresult1%'";
											  $result = mysqli_query($db,$sql);
											  
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<tr>";
											  echo "<th>".$results['track_name']."</th>";
											  echo "</tr>";
											  };
										?>
								</tbody>								
							  </table>					  
							</div>
						</div>
					
					
					
					
					
					
					
				  </div>
				</div>
			</div>
	</section>
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="color:maroon">Leave a Comment</h3>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php include 'comment_panel.php';?>
                </div>
            </div>
        </div>
   
		
	</section>
	</div>
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
										  </div><!--panel-body-->
										</div>	<!--panel-primary-->	
									
									
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
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
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

</body>

</html>