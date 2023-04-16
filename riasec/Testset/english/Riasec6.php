<div class="RIASEC6">
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'R6' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeR6 value='".$results['test_code']."'/>";
													$tquestR6 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeR6];?>"><?php echo $tquestR6;?></td>
								<th><label class="control control--radio"><input type="radio" name="R6" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R6" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R6" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R6" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R6" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'I6' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeI6 value='".$results['test_code']."'/>";
													$tquestI6 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeI6];?>"><?php echo $tquestI6;?></td>
								<th><label class="control control--radio"><input type="radio" name="I6" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I6" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I6" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I6" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I6" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'A6' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeA6 value='".$results['test_code']."'/>";
													$tquestA6 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeA6];?>"><?php echo $tquestA6;?></td>
								<th><label class="control control--radio"><input type="radio" name="A6" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A6" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A6" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A6" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A6" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											$R1 = "R1";
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'S6' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeS6 value='".$results['test_code']."'/>";
													$tquestS6 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeS6];?>"><?php echo $tquestS6;?></td>
								<th><label class="control control--radio"><input type="radio" name="S6" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S6" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S6" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S6" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S6" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
										
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'E6' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeE6 value='".$results['test_code']."'/>";
													$tquestE6 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeE6];?>"><?php echo $tquestE6;?></td>
								<th><label class="control control--radio"><input type="radio" name="E6" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E6" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E6" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E6" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E6" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'C6' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeC6 value='".$results['test_code']."'/>";
													$tquestC6 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeC6];?>"><?php echo $tquestC6;?></td>
								<th><label class="control control--radio"><input type="radio" name="C6" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C6" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C6" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C6" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C6" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							</div>