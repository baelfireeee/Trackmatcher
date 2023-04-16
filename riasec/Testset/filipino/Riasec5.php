<div class="RIASEC5">
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%2%' and `test_code` = 'R5' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeR5 value='".$results['test_code']."'/>";
													$tquestR5 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeR5];?>"><?php echo $tquestR5;?></td>
								<th><label class="control control--radio"><input type="radio" name="R5" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R5" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R5" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R5" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R5" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%2%' and `test_code` = 'I5' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeI5 value='".$results['test_code']."'/>";
													$tquestI5 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeI5];?>"><?php echo $tquestI5;?></td>
								<th><label class="control control--radio"><input type="radio" name="I5" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I5" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I5" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I5" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I5" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%2%' and `test_code` = 'A5' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeA5 value='".$results['test_code']."'/>";
													$tquestA5 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeA5];?>"><?php echo $tquestA5;?></td>
								<th><label class="control control--radio"><input type="radio" name="A5" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A5" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A5" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A5" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A5" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											$R1 = "R1";
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%2%' and `test_code` = 'S5' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeS5 value='".$results['test_code']."'/>";
													$tquestS5 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeS5];?>"><?php echo $tquestS5;?></td>
								<th><label class="control control--radio"><input type="radio" name="S5" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S5" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S5" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S5" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S5" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
										
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%2%' and `test_code` = 'E5' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeE5 value='".$results['test_code']."'/>";
													$tquestE5 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeE5];?>"><?php echo $tquestE5;?></td>
								<th><label class="control control--radio"><input type="radio" name="E5" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E5" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E5" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E5" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E5" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%2%' and `test_code` = 'C5' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeC5 value='".$results['test_code']."'/>";
													$tquestC5 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeC5];?>"><?php echo $tquestC5;?></td>
								<th><label class="control control--radio"><input type="radio" name="C5" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C5" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C5" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C5" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C5" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							</div>	