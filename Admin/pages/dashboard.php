<!DOCTYPE html>
<html lang="en">

<head>

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
                            <img src="photos/photo.png" class="img-responsive" alt="">
                        </li>
						<li class="sidebar-photo" style="margin-right: auto; margin-left: auto">
                             <h4 class="text-center" style="color:#06356f"><?php
										   include("../../dbConfig.php");
												$space = " ";
											  $sql = "SELECT * FROM admin";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<center>"."<h4>".$results['firstname']."<i>".$space."</i>".$results['middlename']."<i>".$space."</i>". $results['lastname']."</h4>"."</center>";
											  };
										 
										?></h4>
							 <a href="adminprofile.php" class="text-center"><i class="glyphicon glyphicon-wrench" style="margin-right: 7px"></i>Profile Setting</a>
							 <a href="#"class="text-center"><i class="glyphicon glyphicon-log-out" style="margin-right: 5px"></i>Logout</a>
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="glyphicon glyphicon-dashboard" style="margin-right: 4px"></i> Dashboard</a>
                        </li>
                       
						<li>
                            <a href="testakers.php"><i class="glyphicon glyphicon-user" style="margin-right: 7px"></i>Test Takers</a>
                        </li>
						<li>
                            <a href="tracks.php"><i class="glyphicon glyphicon-road" style="margin-right: 7px"></i>Tracks</a>
                        </li>
						<li>
                            <a href="strands.php"><i class="glyphicon glyphicon-briefcase" style="margin-right: 7px"></i>Strands</a>
                        </li>
						
						<li>
                            <a href="testquestions.php"><i class="glyphicon glyphicon-list-alt" style="margin-right: 7px"></i>Test Questions</a>
                        </li>
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

          <div id="content">
		  <div id="page-wrapper">

		<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Today's Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
						<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body"> 
									<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Test Takers ID</th>
											<th>Comment</th>
											
										</tr>
									</thead>
									<tbody>
										
											<?php
										   include("../../dbConfig.php");
											  $sql = "SELECT * FROM `comment`";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												
												echo "<tr>"."</tr>";
											  echo "<th>".$results['user_id']."</th>";
											  echo "<th>".$results['user_comment']."</th>";
											  
											echo "<tr>"."</tr>";
											  
										  };
										?>
										
									</tbody>
									</table>
									</div>
									</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Today's Test Takers</div>
                                </div>
                            </div>
                        </div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
						<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body"> 
									<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Time</th>
										</tr>
									</thead>
									<?php
										   include("../../dbConfig.php");
											  $sql = "SELECT * FROM `user` ORDER BY `date_and_time` DESC";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<tbody>";
											  echo "<tr>";
											  echo "<th>".$results['firstname'].$results['middlename'].$results['lastname']."</th>";
											  echo "<th>".$results['date_and_time']."</th>";
										
											  echo "</tr>";
											  echo "</tbody>";
											  };
										 
										?>
									</table>
									</div>
									</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-envelope fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">34</div>
                                    <div>Today's Messages</div>
                                </div>
                            </div>
							
                        </div>
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        <div class="panel-footer">
								
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
							</a>
							<div id="collapse3" class="panel-collapse collapse in">
									<div class="panel-body"> 
									<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Visitor</th>
											<th>Message</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th></th>
											<th></th>
										</tr>
									</tbody>
									</table>
									</div>
									</div>
                            
							
							
                        
						
						
                    </div><!--panel for Messages-->
					
					
                </div>
                
            </div>
         
		   <div class="row">
							<div class="col-sm-6 portfolio-item">
								<div class="panel panel-red">
							
								  <div class="panel-heading" style="text-align: center"><h4>LIST OF STRANDS</h4></div>

								
								  <table class="table table-striped table-bordered table-hover">
									<thead>
									<tr>
										
										<th style="color: #06356f; text-align: center">Name</th>
										<th style="color: #06356f; text-align: center">RIASEC Code</th>
										<th style="color: #06356f; text-align: center">Track ID</th>
										<th style="color: #06356f; text-align: center">Admin ID</th>
										<th style="color: #06356f; text-align: center">Date and Time</th>
										
									</tr>
									</thead>
									
											
										<?php
										   include("../../dbConfig.php");
											  $sql = "SELECT * FROM `strand` ORDER BY `strand_id` ASC";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<tbody>";
											  echo "<th><input type=text name=sname value='".$results['strand_name']."'/></th>";
											  echo "<th><input type=text name=scode value='".$results['strand_code']."'/></th>";
											  echo "<th><input type=text name=tid value='".$results['track_id']."'/></th>";
											  echo "<th>".$results['admin_id']."</th>";
											  echo "<th>".$results['date_and_time']."</th>";
											  
											 
											  echo "</tr>";
											  echo "</tbody>";
											  };
										 
										?>
											
										
								  </table></br>
								  
							 
								</div><!--panel-primary-->

							</div>
						
						</div><!--table row-->
				<div class="col-lg-12">
                  
					<div class="panel panel-primary">
							
							  <div class="panel-heading" style="text-align: center"><h4>Test Takers</h4></div>

							
							  <table class="table table-striped toggle-circle-filled">
								<thead>
								<tr>
									<th style="color: #06356f">TRACKS</th>
								</tr>
								</thead>
								<tbody>
									<tr><th>Academic Track</br>
									Technival Vocational Livelihood Track</br>
									Arts and Design Track</br>
									Sports Track</br>
									</th>
									</tr>
								</tbody>
							  </table></br>
							  
							
							  
							  
				</div>-->
				
				
				
           
                </div>

			
		  
		
  </div>
           
       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	<script src="js/jquery-3.1.1.js"></script>
    <script src="js/general.js"></script>
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






