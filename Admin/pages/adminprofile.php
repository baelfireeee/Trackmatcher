<?php
include 'adminsession.php';
if(!$_SESSION["idadmin"])
{
    //Do not show protected data, redirect to login...
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="../../img/icon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin TM</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html" style="color: #06356f">T R A C K<span style="color: maroon"> M A T C H E R</span></a>
					</div>
            <!-- /.navbar-header -->
				<ul class="nav navbar-top-links navbar-right">
				<li>
					 <a href="logout.php"class="text-center"><i class="glyphicon glyphicon-log-out" style="margin-right: 5px"></i>Logout</a>
				</li>
			</ul>
            
                    <!-- /.dropdown-tasks -->
              
                <!-- /.dropdown -->
                
       

          
            <!-- /.navbar-top-links -->

            <div id="nav" class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
						<li class="sidebar-photo">
                            <img src="photos/logo.jpg" class="img-responsive" alt="">
                        </li>
                        <li class="sidebar-photo">
							<?php
							include("../../dbConfig.php");
							$sql = "SELECT * FROM admin WHERE admin_id = $adminid";
							$result = mysqli_query($db,$sql);
							while ($results = mysqli_fetch_array($result)){
								
								echo "<img src='images/".$results['image']."' class='img-responsive' alt=''/>";
								
								
							}
							
							?>
						
						
                            
                        </li>
						<li class="sidebar-photo" style="margin-right: auto; margin-left: auto">
                             <h4 class="text-center" style="color:#06356f"><?php
										   include("../../dbConfig.php");
												$space = " ";
											  $sql = "SELECT * FROM admin WHERE admin_id='$adminid'";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<center>".$results['firstname']."<i>".$space."</i>".$results['middlename']."<i>".$space."</i>". $results['lastname']."</h4>"."</center>";
											  echo "<center>"."<p>"."Username:"."<i>".$space."</i>".$results['username']."</p>"."</center>";
echo "<center>"."<p>"."Email:"."<i>".$space."</i>".$results['email']."</p>"."</center>";
echo "<center>"."<p>"."ID:"."<i>".$space."</i>".$results['admin_id']."</p>"."</center>";
											  
											  };
										 
										?>
							 <a href="adminprofile.php" class="text-center"><i class="glyphicon glyphicon-wrench" style="margin-right: 7px"></i>Profile Setting</a>
							
                        </li>
                        <li>
                            <a href="admin.php"><i class="glyphicon glyphicon-dashboard" style="margin-right: 4px"></i> Dashboard</a>
                        </li>
                       
						<li>
                            <a href="testakers.php?page=1"><i class="glyphicon glyphicon-user" style="margin-right: 7px"></i>Test Takers</a>
                        </li>
						<li>
                            <a href="tracks.php"><i class="glyphicon glyphicon-road" style="margin-right: 7px"></i>Tracks</a>
                        </li>
						<li>
                            <a href="strands.php?page=1"><i class="glyphicon glyphicon-briefcase" style="margin-right: 7px"></i>Strands</a>
                        </li>
						
						<li>
                            <a href="testquestions.php?page=1"><i class="glyphicon glyphicon-list-alt" style="margin-right: 7px"></i>Test Questions</a>
                        </li>
						
						<li>
                            <a href="message.php?page=1"><i class="fa fa-envelope" style="margin-right: 7px"></i>Messages</a>
                        </li>
						<li>
                            <a href="comment.php?page=1"><i class="fa fa-comment" style="margin-right: 7px"></i>Comments</a>
                        </li>
						<li>
                            <a href="Others.php"><i class="glyphicon glyphicon-flash" style="margin-right: 7px"></i>Others</a>
                        </li>
<li>
                            <a href="log.php?page=1"><i class="glyphicon glyphicon-book" style="margin-right: 7px"></i>Log</a>
                        </li>
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        
					
<div id="page-wrapper">
					<div class="row">
									<div class="col-lg-12">
										<h1 class="page-header">Profile Setting</h1>
									</div>
									<!-- /.col-lg-12 -->
					</div>
					<div class="row">
									
									<div class="col-sm-6">
									
										<h3 class="page-header">Basic Info</h3>
									Change your Basic information
									
									 
										<form action="updateadminbasic.php" method="post">
													<div class="addcontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
													
										
															<label><b>First Name</b></label>
																<input type="text" placeholder="First Name" name="firname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															<label><b>Middle Name</b></label>
																<input type="text" placeholder="Middle Name" name="midname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															<label><b>Last Name</b></label>
																<input type="text" placeholder="Last Name" name="lasname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															<label><b>Email Address</b></label>
																<input type="email" placeholder="Ex. abc@xyz.com" name="email" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>

															<button type="submit" onclick="return confirm('Are you sure you want to Apply this Changes?')" class="widebtn btn btn-warning"><i class="glyphicon glyphicon-check"></i> Change</button></br>
														
															
															
													</div></br><!--logincontainer-->
											</form><!--php-->
																						<h3 class="page-header">Administrator</h3>
													Add an Admin
													<form action="addadmin.php" method="post">
													<div class="addcontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
													
															<div>
															<label><b>First Name</b></label>
																<input type="text" placeholder="First Name" name="firstname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															<label><b>Middle Name</b></label>
																<input type="text" placeholder="Middle Name" name="middlename" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															
															<label><b>Last Name</b></label>
																<input type="text" placeholder="Last Name" name="lastname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
															<label><b>Email Address</b></label>
																<input type="email" placeholder="Ex. abc@xyz.com" name="emailadd" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															<label><b>Username</b></label>
																<input type="text" placeholder="Username" name="username" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;" required>
															<label><b>Password</b></label>
																<p>Password must contain the following:</br> atleast 8 Characters Long</br> atleats 1 Special Character ("@#$%^&*")</br>Combination of Uppercase and Lowercase Letters</p>
																<input type="password" placeholder="Password" name="password" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
															
															
															

															<button type="submit" class="widebtn btn btn-success"><i class="glyphicon glyphicon-plus"></i> ADD</button></br>
															
													</div></br><!--logincontainer-->
													</div>
											</form><!--php-->
										
									</div><!--col-sm-6-->
									
												<div class="col-sm-6">
													<h3 class="page-header">Account Info</h3>
													Change your Account information
													<form action="updateadminusername.php" method="post">
													<div class="addcontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
													
															<div>
															<label><b>Old Username</b></label>
																<input type="text" placeholder="Old Username" name="username" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
															<label><b>New Username</b></label>
																<input type="text" placeholder="New Username" name="newusername" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"></div></br>
															<div>
															

															<button type="submit" class="widebtn btn btn-warning"><i class="glyphicon glyphicon-check"></i> Change</button></br>
															
													</div></br><!--logincontainer-->
													</div>
											</form><!--php-->
												<form action="updateadminaccount.php" method="post">
													<div class="addcontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
													
															<label><b>Old Password</b></label>
																<input type="password" placeholder="Old Password" name="oldpass" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
															<label><b>New Password</b></label>
															<p>Password must contain the following:</br> atleast 8 Characters Long</br> atleats 1 Special Character ("@#$%^&*")</br>Combination of Uppercase and Lowercase Letters</p>
																<input type="password" placeholder="New Password" name="newpass" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
															<label><b>Confirm Password</b></label>
																<input type="password" placeholder="Confirm Password" name="newpasses" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;"><div>
														

															<button type="submit" class="widebtn btn btn-warning"><i class="glyphicon glyphicon-check"></i> Change</button></br>
															
													</div></br><!--logincontainer-->
											</form><!--php-->
												
												</div>
												
												<h3 class="page-header">Profile Picture</h3>
													Add a Photo
													<form action="adminpicture.php" method="post" enctype="multipart/form-data">
													
													
													<div>
														<input type="file" name="image"/>
													</div>
													
														
															<div>
															

															</br><button type="submit" class="widebtn btn btn-success" name="upload" ><i class="glyphicon glyphicon-plus"></i> Upload File</button></br>
															</div>
													</br><!--logincontainer-->
													</div>
											</form><!--php-->
											
											
					 
									</div><!--col-sm-6-->
	
		
			</div>
           
       
        <!-- /#page-wrapper -->

    <!-- /#wrapper -->

    <!-- jQuery -->
	<script src="js/jquery-3.1.1.js"></script>

	<script src="../vendor/jquery/jquery.min.js"></script>
	

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
	








