<div class="RIASEC8">
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'R8' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeR8 value='".$results['test_code']."'/>";
													$tquestR8 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeR8];?>"><?php echo $tquestR8;?></td>
								<th><label class="control control--radio"><input type="radio" name="R8" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R8" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R8" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R8" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="R8" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'I8' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeI8 value='".$results['test_code']."'/>";
													$tquestI8 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeI8];?>"><?php echo $tquestI8;?></td>
								<th><label class="control control--radio"><input type="radio" name="I8" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I8" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I8" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I8" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="I8" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'A8' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeA8 value='".$results['test_code']."'/>";
													$tquestA8 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeA8];?>"><?php echo $tquestA8;?></td>
								<th><label class="control control--radio"><input type="radio" name="A8" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A8" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A8" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A8" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="A8" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											$R1 = "R1";
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'S8' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeS8 value='".$results['test_code']."'/>";
													$tquestS8 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeS8];?>"><?php echo $tquestS8;?></td>
								<th><label class="control control--radio"><input type="radio" name="S8" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S8" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S8" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S8" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="S8" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
										
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'E8' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeE8 value='".$results['test_code']."'/>";
													$tquestE8 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeE8];?>"><?php echo $tquestE8;?></td>
								<th><label class="control control--radio"><input type="radio" name="E8" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E8" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E8" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E8" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="E8" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							<tr>
							<?php
										   include("dbConfig.php");
											
											  $sql = "SELECT * FROM `test` WHERE `testLanguage_id` LIKE '%1%' and `test_code` = 'C8' ";
											  $result = mysqli_query($db,$sql);
											   while($results = mysqli_fetch_assoc($result)){
												    echo "<input type=hidden name=tcodeC8 value='".$results['test_code']."'/>";
													$tquestC8 = $results['test_question'];
											   };
							
							
											 
										 
										?>
								
								<td name="<?php echo $_POST[tcodeC8];?>"><?php echo $tquestC8;?></td>
								<th><label class="control control--radio"><input type="radio" name="C8" value="1" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C8" value="2" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C8" value="3" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C8" value="4" required/><div class="control__indicator"></div></label></th>
								<th><label class="control control--radio"><input type="radio" name="C8" value="5" required/><div class="control__indicator"></div></label></th>								
							</tr>
							</div>	