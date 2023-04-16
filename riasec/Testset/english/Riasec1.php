
								
			

<div class="RIASEC1">
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'R1' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcoder1 value='".$results['test_code']."'/>";
													$tquestR1 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcoder1];?>"><?php echo $tquestR1;?></td>
								<th><label class="control control--radio"><input type="radio" name="R1" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R1" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R1" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R1" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R1" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'I1' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcoder2 value='".$results['test_code']."'/>";
													$tquestI1 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcoder2];?>"><?php echo $tquestI1;?></td>
								<th><label class="control control--radio"><input type="radio" name="I1" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I1" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I1" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I1" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I1" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'A1' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcoder3 value='".$results['test_code']."'/>";
													$tquestA1 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcoder3];?>"><?php echo $tquestA1;?></td>
								<th><label class="control control--radio"><input type="radio" name="A1" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A1" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A1" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A1" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A1" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											$R1 = "R1";
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'S1' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcoder4 value='".$results['test_code']."'/>";
													$tquestS1 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcoder4];?>"><?php echo $tquestS1;?></td>
								<th><label class="control control--radio"><input type="radio" name="S1" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S1" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S1" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S1" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S1" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
										
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'E1' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcoder5 value='".$results['test_code']."'/>";
													$tquestE1 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcoder5];?>"><?php echo $tquestE1;?></td>
								<th><label class="control control--radio"><input type="radio" name="E1" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E1" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E1" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E1" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E1" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'C1' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcoder6 value='".$results['test_code']."'/>";
													$tquestC1 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcoder6];?>"><?php echo $tquestC1;?></td>
								<th><label class="control control--radio"><input type="radio" name="C1" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C1" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C1" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C1" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C1" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							
							</div>	