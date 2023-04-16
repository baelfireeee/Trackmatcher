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
                <ul class="nav navbar-nav navbar-right" style="height:100%" id="navi">
                    
					
					<li class="page-scroll">
                        <a href="index.php">HOME</a>
                    </li>
                   
					<li class="page-scroll">
                      <!-- <a href="#"><img id="photo" src="img/photo.png" onclick="document.getElementById('id01').style.display='block'"></a>
					   

						<div id="id01" class="modal">
  
							<form class="modal-content animate" action="action_page.php" style="margin-top:90px; margin-right:1px">
									<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
	-->
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><img id="photo" src="img/photo.png">
				<span class="tooltiptext">Login</span>
				<i class="icon icon-caret-left"></i>
				</a>
					
					 
							<ul class="dropdown-menu" height="100%" >
						<div class="logincontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
									<label><b>Username</b></label>
										<input type="text" placeholder="Enter Username" name="uname" required style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">

									<label><b>Password</b></label>
										<input type="password" placeholder="Enter Password" name="psw" required>
        
									<button type="submit" class="widebtn">Login</button>
									<input type="checkbox" checked="checked"> Remember me
						</div>

									<div class="footercontainer" style="background-color:#f1f1f1; margin-bottom: 20px">
										<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-left:35px">Cancel</button>
										<span class="psw" style="margin-right:35px">Forgot <a href="#">password?</a></span>
									</div>
									</ul>
							<!--</form>
						</div>-->

										<script>
											// Get the modal
														var modal = document.getElementById('id01');

											// When the user clicks anywhere outside of the modal, close it
														window.onclick = function(event) {
																if (event.target == modal) {
																modal.style.display = "none";
																	}
																			}
															</script>
                    </li>
					
					
					<li>
					<!--<a href="#"><img id="search" src="img/search.png" onclick="document.getElementById('id02').style.display='block'"></a>
					   

						<div id="id02" class="modal">
  
							<form class="modal-content animate" action="action_page.php" style="margin-top:90px; margin-right:1px; padding-bottom:10px">
									<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								<div class="col-lg-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for..." style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" >
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" style=" width: 100%; padding: 6px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">Go!</button>
									</span>
									</div>
								</div>	

						<div class="logincontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
									<script>
											// Get the modal
														var modal = document.getElementById('id02');

											// When the user clicks anywhere outside of the modal, close it
														window.onclick = function(event) {
																if (event.target == modal) {
																modal.style.display = "none";
																	}
																			}
															</script>
						</div>
					</div>-->
					<!--Dropdown search-->
					<li class="page-scroll">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><img id="search" src="img/search.png">
					  <span class="tooltiptext">Search</span>
						<i class="icon icon-caret-left"></i>
					  </a>
							<ul class="dropdown-menu" >
								<div class="col-lg-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for..." style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" >
									<span class="input-group-btn">
										<button class="btn btn-default" type="button" style=" width: 100%; padding: 6px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">Go!</button>
									</span>
									</div>
								</div>	
							</ul>
					  
					</li>
					
					<!--        for search bars
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
									<button class="btn btn-default" type="button">Go!</button>
							</span>
						</div>
					</div><!-- /input-group 
					
					for dropright
					
					 <li>
							<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									Menu 1
									<i class="icon icon-caret-right"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Choice1</a></li>
									<li><a href="#">Choice2</a></li>
									<li><a href="#">Choice3</a></li>
									<li class="divider"></li>
									<li><a href="#">Choice..</a></li>
								</ul>
							</div>
					</li>

		
					-->
				
					
					
				
               
				</ul>
				</div>
					
		
				
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
<div class="content">

 <section id="createprofile">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="color:maroon">Create Profile</h2>
                    <hr class="star-primary">
                </div>
            </div>
			<div class="col-lg-8 col-lg-offset-2 text-center" style="color: #06356f">
                        <p>You need to Create a Profile in order for you to Take the Test<p>
                    </div>
					</br>
					</br>
			
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Age</label>
                                <input type="tel" class="form-control" placeholder="Age" id="age">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Gender</label>
								<p style="color: gray">Gender</p>     
									<p style="color: gray; text-indent: 3em"><input type="radio" name="gender" value="male">Male</p>
									<p style="color: gray; text-indent: 3em"><input type="radio" name="gender" value="male">Female</p>
                                <p class="help-block text-danger"></p>
               
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" id="address">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
						<div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>School</label>
                                <input type="text" class="form-control" placeholder="School (optional)" id="phone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12" action="Test1.php" method="get">
                                <button type="submit" class="btn btn-success btn-lg" onclick="myFunction()" style="position: center">Submit and Take the Test</button>
							     </div>
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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





    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/jquery-3.1.1.min"></script>
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




















