</br><div>
<?php
										   include("dbConfig.php");
												$space = " ";
											  $sql = "SELECT * FROM riasec WHERE riasec_name LIKE '%conventional%'";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
											 echo "<h4>".$results['riasec_name']."</h4>";
											 echo "<p>".$results['riasec_defined']."</p>"; 
											  };
										 
										?>

</div>