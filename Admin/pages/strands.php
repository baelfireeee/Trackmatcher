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
											  echo "<center>"."<h4>".$results['firstname']."<i>".$space."</i>".$results['middlename']."<i>".$space."</i>". $results['lastname']."</h4>"."</center>";
											  $adminid = $results['admin_id'];
											  };
									
										?></h4>
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

          <div id="content">
				<div id="page-wrapper">
				<div class="row">
								<div class="col-lg-12">
									<h1 class="page-header">Strands
									<div style="float: right">
									<button type="button" class="btn btn-success" href="#Add" data-toggle="modal"><i class="glyphicon glyphicon-plus "> </i> Add Strand</button>
									
									</div>
									</h1>
								<!--  	<div class="row">
									<form method="post" action="strands.php">
									<div class="col-lg-12">
									<div class="input-group">
									  <input type="text" class="form-control" name="searchstrand" placeholder="Search for..."/>
									  <span class="input-group-btn">
										<button class="btn btn-default" type="submit" name="search">Go!</button>
									  </span>
									 
									</div>
								  </div></form>
								  </div>-->
								 
								  
								  
								</div><!-- /.col-lg-12 -->
								<div class="col-sm-12">
									
									
								</div>
								<div class="portfolio-modal modal fade" id="Add" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="container" style="margin-top: 70px">
											<div class="row">
										
											<div class="col-sm-6 col-lg-offset-3">
													
												<div class="panel panel-default">
												  <div class="panel-heading"><h4>Add Strand</h4></div>
												  <div class="panel-body">

											<form action="addstrand.php" method="post">
													<div class="addcontainer" style="margin-left:35px; margin-right:35px; margin-top:40px">
															<label><b>Strand Name</b></label>
																<input type="text" placeholder="Strand Name" name="sname" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">

															<label><b>RIASEC Code</b></label>
																<input type="text" placeholder="RIASEC Code" name="rcode" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
																
															<label><b>Track Code</b></label>
																<select name=tid placeholder="Track Code" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
																  <option value=""></option>
																  <option value="1">Academic</option>
																  <option value="4">Technical Vocational Livelihood</option>
																  <option value="3">Sports</option>
																  <option value="2">Arts and Design</option>
																</select>
																<label><b>Schools</b></label>
																<textarea placeholder="Lists of Schools" name="sschool" style=" width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">
																</textarea>
															<button type="submit" class="widebtn btn btn-success" style><i class="glyphicon glyphicon-plus"></i> ADD</button></br>
															
													</div></br><!--logincontainer-->

															<div class="footercontainer" style="background-color:#fff; margin-bottom: 20px">
																<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn btn btn-danger" style="margin-left:35px" data-dismiss="modal">Cancel <i class="glyphicon glyphicon-share-alt"></i> </button>
																
																
															</div>
											</form><!--php-->
												  </div>
												</div>		
											</div>

									</div>
										
									
								</div>
							</div>
								
							</div>
						<div class="row">
							<div class="col-sm-12 portfolio-item">
								<div class="panel panel-primary">
							
								  <div class="panel-heading" style="text-align: center"><h4>LIST OF STRANDS</h4>
								  </div>

								
								  <table class="table table-striped table-bordered table-hover">
									<thead>
									<tr>
                                                                                                       
										<th style="color: #06356f; text-align: center">ID</th>
										<th style="color: #06356f; text-align: center">Name</th>
										<th style="color: #06356f; text-align: center; width: 80px">RIASEC Code</th>
										<th style="color: #06356f; text-align: center">School</th>
										<th style="color: #06356f; text-align: center; width: 40px">Track ID</th>
										<th style="color: #06356f; text-align: center">Admin ID</th>
										<th style="color: #06356f; text-align: center; width: 100px">Date and Time</th>
										<th style="color: #06356f; text-align: center">Action</th>
										
									</tr>
									</thead>
									
										
										<?php
										   include("../../dbConfig.php");
										   $page=$_GET["page"];
												if($page=="" || $page=="1"){
													$page1=0;
												}else{
													$page1=($page*5)-5;
												}
										   
										 
										   
										   
											  $sql = "SELECT * FROM `strand` LIMIT $page1,5";
											  $result = mysqli_query($db,$sql);
												$TVL="4";
												$A="1";
												$S="3";
												$AD="2";
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<tbody>";
											  echo "<tr><form action=updatestrand.php method=post>";
											  echo "<th>".$results['strand_id']."</th>";"'/></th>";
											  echo "<th><textarea type=text name=sname value='".$results['strand_name']."' style='width: 100%; height: 70px'>".$results['strand_name']."</textarea></th>";
											  echo "<th><input type=text name=scode value='".$results['strand_code']."' style='width: 100%; height: 70px'/></th>";
											  echo "<th><textarea type=text name=sschool value='".$results['strand_school']."' style='width: 100%; height: 70px'>".$results['strand_school']."</textarea></th>";
											  echo "<th><select name=tid >
															<option value=".$results['track_id'].">".$results['track_id']."</option>
														  
														  <option value=".$A.">".$A."</option>
														  <option value=".$AD.">".$AD."</option>
														  <option value=".$S.">".$S."</option>
														  <option value=".$TVL.">".$TVL."</option>
														  
														</select></th>";
											  echo "<th>".$results['admin_id']."</th>";
											  echo "<th>".$results['date_and_time']."</th>";
											  echo "<input type=hidden name=sid value='".$results['strand_id']."'/>";
											  
											  echo "<th><center><button class='btn btn-primary' onclick=\"return confirm('Are you sure you want to Apply this Changes?')\" type=submit name=update value=Update ><i class='glyphicon glyphicon-edit'></i> Update</button>
											  
											<a class='btn btn-danger' onclick=\"return confirm('Do you really want to delete this?')\" href=deletestrand.php?id=".$results['strand_id']."><i class='glyphicon glyphicon-minus-sign'></i> Delete</a></center></th>";
											 
											  echo "</form></tr>";
											  echo "</tbody>";
											  
											  }
										 
										
										
										?>




								  </table></br>
								  <ul class="pagination pagination-lg" style="position: absolute; right: 20px;">
   
										<?php
										$res1 = mysqli_query($db,"SELECT * From strand");
											 $cou = mysqli_num_rows($res1);
											 
											 $a = $cou/5;
											 
											$a = ceil($a);
												for($b=1;$b<=$a;$b++){
													echo "<li><a href='strands.php?page=".$b."'>".$b.'  '."</a></li>";
												}
										echo "<li class='disabled '><a>Page No.</a></li>";
										
										?>
    
									  </ul>
							 
								</div><!--panel-primary-->
								

							</div>
						
						</div><!--table row-->
						
				</div>
		
  </div>
           
       
        <!-- /#page-wrapper -->

    </div>
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
		


	