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
										<h1 class="page-header">Comments
										<div style="float: right">
										
									</div></div></h1>
									<!-- /.col-lg-12 -->
									
									
									
								</div>
								
								<div class="row">
							
							<div class="col-sm-12 portfolio-item">
								<div class="panel panel-red">
							
								  <div class="panel-heading" style="text-align: center"><h4>LIST OF COMMENTS</h4></div>

								
								  <table class="table table-striped table-bordered table-hover">
									<thead>
									<tr>
										<th style="color: #06356f; text-align: center"></th>
										<th style="color: #06356f; text-align: center">ID</th>
										<th style="color: #06356f; text-align: center">Comment</th>
										<th style="color: #06356f; text-align: center">Test Taker ID</th>
										<th style="color: #06356f; text-align: center">Date and Time</th>
										<th style="color: #06356f; text-align: center">Action</th>
										
									
									</tr>
									</thead>
									<form name="form1" action="" method="post">
									<?php
										   include("../../dbConfig.php");
										   $page=$_GET["page"];
												if($page=="" || $page=="1"){
													$page1=0;
												}else{
													$page1=($page*7)-7;
												}
										   
										   
											
											  $sql = "SELECT * FROM `comment` ORDER BY `comment_id` DESC LIMIT $page1,7";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											 
											echo "<th><input type='checkbox' name='num[]' value=".$results['comment_id']." /></th>";
											  echo "<th>".$results['comment_id']."</th>";
											  echo "<th>".$results['user_comment']."</th>";
											  echo "<th>".$results['testtaker_id']."</th>";
											  echo "<th>".$results['date_and_time']."</th>";
											  $user = $results['user_id'];
											 echo "<th><center><a onclick=\"return confirm('Are you sure you want to DELETE this Comment?')\" href=deletecomment.php?id=".$results['comment_id']." class='btn btn-danger'><i class='glyphicon glyphicon-minus-sign'></i> Delete</center></a></th>";
											 
											
											 
											  
											 
											  echo "</tr>";
											  echo "</tbody>";
											 
											   
											  };
										 
										?>
								  </table></br>
								  
							 
								</div><!--panel-primary-->
 <input type="submit" name="submit1" id="button" class="btn btn-danger btn-lg" value="Delete selected" onclick="return confirm('Do you really want to delete all of this?')" ></form>
									<?php

																if(isset($_POST['submit1'])){
																	$box=$_POST['num'];
																	while (list ($key,$val) = @each ($box)){
																		mysqli_query($db,"DELETE FROM comment WHERE comment_id = $val");
																		
																	$sql1 = "INSERT INTO `log` (`id`, `action`, `admin_id`, `table_name`, `table_id`, `date_and_time`) VALUES (NULL, 'delete', '$adminid', 'comment', '$val', CURRENT_TIMESTAMP)";
												if(mysqli_query($db,$sql1)){
													
												echo"<SCRIPT LANGUAGE='JavaScript'> window.alert('Comments Deleted')</SCRIPT>";
																	?>
																	<script type="text/javascript">
																	window.location.href=window.location.href;
																	</script>
																	<?php
												
											}
																	
															}		
																	
																	
																	
																}

																?>

								<ul class="pagination pagination-lg" style="position: absolute; right: 20px;" >
   
										<?php
										$res1 = mysqli_query($db,"SELECT * From comment");
											 $cou = mysqli_num_rows($res1);
											 
											 $a = $cou/7;
											 
											$a = ceil($a);
												for($b=1;$b<=$a;$b++){
													echo "<li><a href='comment.php?page=".$b."'>".$b.'  '."</a></li>";
												}
										echo "<li class='disabled'><a>Page No.</a></li>";
										
										?>
    
									  </ul>
								

							</div>
						
						</div><!--table row-->
					</div>
           
       
        <!-- /#page-wrapper -->
		
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
			



		