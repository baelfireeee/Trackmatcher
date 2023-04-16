<div class="RIASEC3">
							
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'R3' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeR3 value='".$results['test_code']."'/>";
													$tquestR3 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeR3];?>"><?php echo $tquestR3;?></td>
								<th><label class="control control--radio"><input type="radio" name="R3" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R3" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R3" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R3" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R3" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'I3' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeI3 value='".$results['test_code']."'/>";
													$tquestI3 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeI3];?>"><?php echo $tquestI3;?></td>
								<th><label class="control control--radio"><input type="radio" name="I3" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I3" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I3" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I3" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I3" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'A3' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeA3 value='".$results['test_code']."'/>";
													$tquestA3 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeA3];?>"><?php echo $tquestA3;?></td>
								<th><label class="control control--radio"><input type="radio" name="A3" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A3" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A3" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A3" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A3" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											$R1 = "R1";
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'S3' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeS3 value='".$results['test_code']."'/>";
													$tquestS3 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeS3];?>"><?php echo $tquestS3;?></td>
								<th><label class="control control--radio"><input type="radio" name="S3" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S3" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S3" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S3" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S3" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
										
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'E3' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeE3 value='".$results['test_code']."'/>";
													$tquestE3 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeE3];?>"><?php echo $tquestE3;?></td>
								<th><label class="control control--radio"><input type="radio" name="E3" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E3" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E3" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E3" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E3" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'C3' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeC3 value='".$results['test_code']."'/>";
													$tquestC3 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeC3];?>"><?php echo $tquestC3;?></td>
								<th><label class="control control--radio"><input type="radio" name="C3" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C3" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C3" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C3" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C3" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							</div>
						