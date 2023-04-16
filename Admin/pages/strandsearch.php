
										
									<?php
										   include("../../dbConfig.php");
										
											  $strand = $_POST['strandsearch'];
											  $sql = "SELECT * FROM `school` WHERE `strand_name` LIKE '%$strand%' ";
											  $result = mysqli_query($db,$sql);
											  echo $strand."</br>";
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<input name=strands value=".$results['school_name']."/></br>";
											  
											  };
										 
										?>