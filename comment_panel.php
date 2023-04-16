<form action="comment.php" method="post" >
                        
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Comment</label>
                                <textarea rows="5" class="form-control" placeholder="Comment" id="comment"name="comment"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" name="sendcomment">Send and Go back to Home</button>
                            </div>
                        </div>
						
						
		<?php
			$sql = "SELECT * FROM  `user` ORDER BY  `user_id` DESC LIMIT 1";
			$result = mysqli_query($db,$sql);
											  
			 while($results = mysqli_fetch_assoc($result)){
											 
			$userid = $results['user_id'];
					
					echo "<input type='hidden' name='userid' value=".$results['user_id']."/>";					  
			};
				
		
		?>
						
                    </form>
