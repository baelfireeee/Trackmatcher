

<div><form action="result.php" method="post">
					</br><h4 name="english" value="english" style="text-align: center">english</h4>
							<div class="col-lg-12 table-responsive">
									<table class="table table-striped table-bordered toggle-circle-filled table-fixed-header">
						<div class="Topcolumn">	
							<thead class="header" style="width: 56.9%">
							<tr>
								<th data-toggle="true" style="width: 348px"></th>
								<th data-hide="phone" style="width: 62px">Dislike</th>
								<th data-hide="phone" style="width: 117px">Slightly Dislike</th>
								<th data-hide="phone" style="width: 74px">Neutral</th>
								<th data-hide="phone" style="width: 120px">Slightly Enjoy</th>
								<th data-hide="phone" style="width: 58px">Enjoy</th>
							</tr>
							</thead>
						</div>
						
						<tbody>
						<?php $random = mt_rand(1, 4);
							if ($random == 1){
								include 'riasec/Testset/english/Riasec1.php';
								include 'riasec/Testset/english/Riasec5.php';
								include 'riasec/Testset/english/Riasec2.php';
								include 'riasec/Testset/english/Riasec6.php';
								include 'riasec/Testset/english/Riasec3.php';
								include 'riasec/Testset/english/Riasec7.php';
								include 'riasec/Testset/english/Riasec4.php';
								include 'riasec/Testset/english/Riasec8.php';
							}else if ($random == 2){
								include 'riasec/Testset/english/Riasec2.php';
								include 'riasec/Testset/english/Riasec4.php';
								include 'riasec/Testset/english/Riasec6.php';
								include 'riasec/Testset/english/Riasec8.php';
								include 'riasec/Testset/english/Riasec1.php';
								include 'riasec/Testset/english/Riasec3.php';
								include 'riasec/Testset/english/Riasec5.php';
								include 'riasec/Testset/english/Riasec7.php';
							}else if ($random == 3){					
								include 'riasec/Testset/english/Riasec5.php';
								include 'riasec/Testset/english/Riasec8.php';
								include 'riasec/Testset/english/Riasec4.php';
								include 'riasec/Testset/english/Riasec7.php';
								include 'riasec/Testset/english/Riasec3.php';
								include 'riasec/Testset/english/Riasec6.php';
								include 'riasec/Testset/english/Riasec2.php';
								include 'riasec/Testset/english/Riasec1.php';
							}else if ($random == 4){
								include 'riasec/Testset/english/Riasec4.php';
								include 'riasec/Testset/english/Riasec3.php';
								include 'riasec/Testset/english/Riasec2.php';
								include 'riasec/Testset/english/Riasec1.php';
								include 'riasec/Testset/english/Riasec8.php';
								include 'riasec/Testset/english/Riasec7.php';
								include 'riasec/Testset/english/Riasec6.php';
								include 'riasec/Testset/english/Riasec5.php';
							}
						?>
						
						</tbody>
						<hr>
					<input type="hidden" name="profilename" value="<?php echo $_POST["fname"];?>"/>
					<input type="hidden" name="middlename" value="<?php echo $_POST["mname"];?>"/>
					<input type="hidden" name="lastname" value="<?php echo $_POST["lname"];?>"/>
					<input type="hidden" name="age" value="<?php echo $_POST["age"];?>"/>
					<input type="hidden" name="gender" value="<?php echo $_POST["gender"];?>"/>
					<input type="hidden" name="location" value="<?php echo $_POST["address"];?>"/>
					<input type="hidden" name="school" value="<?php echo $_POST["school"];?>"/>
					<input type="hidden" name="email" value="<?php echo $_POST["email"];?>"/>
					<?php
										   include("dbConfig.php");
												
											  
											  $sql = "SELECT * FROM `testlanguage` WHERE `testLanguage_id`='1' ";
											  $result = mysqli_query($db,$sql);
											  
											   while($results = mysqli_fetch_assoc($result)){
											  echo "<input type=hidden name=language value='".$results['testLanguage_id']."'/>";
											  
											  };
										 
										?>
					</table>
						<button type="submit" class="btn btn-success btn-lg" style="position: center">Submit Answers</button>
						</hr>
						
                </div>
				</form>
				</div></br>